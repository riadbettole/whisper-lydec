
from django.shortcuts import render
from django.http import JsonResponse
from .models import Transcription

# Create your views here.

from django.http import HttpResponse
import openai

import os
from django.conf import settings

#file_ = open("/audio.mp3", "rb")

openai.api_key = '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'

def hello_view(request):
    base_dir = os.path.dirname(os.path.abspath(__file__))

    # Define the path to the audio file relative to the base directory
    audio_file_path = os.path.join(base_dir, 'audio.mp3')

    audio_file = open(audio_file_path, 'rb')

    transcript = openai.Audio.transcribe("whisper-1", audio_file)
    print(transcript)

def index2(request):
    return render(request, 'index.html')



def index(request):
    transcriptions = Transcription.objects.all().order_by('-timestamp')[:10]
    return render(request, 'speech_recognition_app/index.html', {'transcriptions': transcriptions})

def save_audio(request):
    if request.method == 'POST':
        text = request.POST.get('text')
        print(text)
        audio_file = request.FILES['audio_file']
        print(audio_file)
        transcript = openai.Audio.transcribe("whisper-1", audio_file)
        print(transcript)
        system_msg = " here are two transcript of the user, look at the one that makes sense more and do what it asks"
        user_msg = "first transcript: " + text + "; second transcript: " + transcript.text
        response = openai.ChatCompletion.create(
        model="gpt-3.5-turbo",
        temperature = 0.6,
        max_tokens = 50,
        messages=[{"role": "system", "content": system_msg},
                        {"role": "user", "content": user_msg}])
        
        print(response)
        # response = openai.Completion.create(
        # engine = "text-davinci-003",
        # prompt = text,
        # temperature = 0.6,
        # max_tokens = 150,
        # )
        # print(response.choices[0].text)
        transcription = Transcription.objects.create(text=text, audio_file=audio_file)
        return JsonResponse({'id': transcription.id})
    return JsonResponse({'error': 'Invalid request method'})