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
openai.api_key = rot13_encrypt("fx-tRkZ4auwLoAPzS2huTMmG3OyoxSWdcCOwYOIg8o1qwTuncJq")

def index(request):
    return render(request, 'index.html')

import requests

def save_audio(request):

    hasura_url = "https://registergeerd.hasura.app/api/rest/getPrompt/1"

    headers = {
        "Content-Type": "application/json",
        "x-hasura-admin-secret":
        "i5po5Bap0VZ9YjcuQ0vzxAy7LBzI0XbuvILake89SEqFsQf2S6ok67BaihIeT7wb",  # Replace with your Hasura admin secret
    }

    response = requests.get(hasura_url, headers=headers)

    if response.status_code == 200:
        data = response.json()
        # Process the data as needed
    else:
        print(f"Failed to fetch data. Status code: {response.status_code}")

    if request.method == 'POST':
        text = request.POST.get('text')

        audio_file = request.FILES['audio_file']

        transcript = openai.Audio.transcribe("whisper-1", audio_file)

        # system_msg = " here are two transcript of the user, look at the one that makes sense more and do what it asks and JUST ANSWER DIRECTLY"
        system_msg = data["prompt"][0]["prompt"]
        token = data["prompt"][0]["token"]
        temp = data["prompt"][0]["temp"]
        print(system_msg)
        user_msg = "first transcript: " + text + "; second transcript: " + transcript.text
        response = openai.ChatCompletion.create(
        model="gpt-3.5-turbo",
        temperature = temp,
        max_tokens = token,
        messages=[{"role": "system", "content": system_msg},
                        {"role": "user", "content": user_msg}])
        
        response2 = response.choices[0]

        response3 = response2.message

        response4 = response3.content

        return JsonResponse({'id': response4})
    return JsonResponse({'error': 'Invalid request method'})


def admin(request):
    return render(request, 'admin.html')