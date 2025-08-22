from django.contrib import admin
from .models import Project, Task

# Register your models here.
#importamos nuestros modelos al admin
admin.site.register([Project,Task])