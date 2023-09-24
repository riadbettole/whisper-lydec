from django.db import models

class Transcription(models.Model):
    text = models.TextField()
    timestamp = models.DateTimeField(auto_now_add=True)
    audio_file = models.FileField(upload_to='audio/')

    def __str__(self):
        return f"Transcription #{self.id}"