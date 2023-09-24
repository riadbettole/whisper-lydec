# example/views.py

import openai
from django.shortcuts import render
from django.http import JsonResponse
import os

openai.api_key = os.environ.get('api_key')

def index(request):
    return render(request, 'index.html')

def save_audio(request):
    if request.method == 'POST':
        text = request.POST.get('text')

        audio_file = request.FILES['audio_file']

        transcript = openai.Audio.transcribe("whisper-1", audio_file)

        system_msg = " here are two transcript of the user, look at the one that makes sense more and do what it asks"
        user_msg = "first transcript: " + text + "; second transcript: " + transcript.text
        response = openai.ChatCompletion.create(
        model="gpt-3.5-turbo",
        temperature = 0.6,
        max_tokens = 50,
        messages=[{"role": "system", "content": system_msg},
                        {"role": "user", "content": user_msg}])
        
        response2 = response.choices[0]

        response3 = response2.message

        response4 = response3.content

        return JsonResponse({'id': response4})
    return JsonResponse({'error': 'Invalid request method'})