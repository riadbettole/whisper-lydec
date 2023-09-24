# myapp/urls.py

from django.urls import path
from . import views

urlpatterns = [
    path('', views.index2, name='index'),
    path('hello/', views.hello_view, name='myapp-view'),
    path('save_audio/', views.index, name='save_audio1'),
    path('save_transcription/', views.save_audio, name='save_audio2'),
    # Add more URL patterns as needed
]