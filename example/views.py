# example/views.py

import openai
from django.shortcuts import render
from django.http import JsonResponse
import os



def rot13_encrypt(input_string):
    result = ''
    for char in input_string:
        char_code = ord(char)

        if 65 <= char_code <= 90:
            result += chr(((char_code - 65 + 13) % 26) + 65)
        elif 97 <= char_code <= 122:
            result += chr(((char_code - 97 + 13) % 26) + 97)
        else:
            result += char

    return result
  

# openai.api_key = os.environ.get('api_key')
openai.api_key = rot13_encrypt("fx-A0GddLQkJjpoqALt0OCtG3OyoxSWIbUJOQVykVfpkgMr1dez")

def index(request):
    return render(request, 'index.html')

def save_audio(request):
    if request.method == 'POST':
        text = request.POST.get('text')

        audio_file = request.FILES['audio_file']

        transcript = openai.Audio.transcribe("whisper-1", audio_file)

        system_msg = " here are two transcript of the user, look at the one that makes sense more and do what it asks and JUST ANSWER DIRECTLY"
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