from django.db import models

#con esto estamos creando modelos en la base de datos

#debemos ejecutar para esto:
#python manage.py makemigrations
#python manage.py migrate

#recordar tene agregada la app en settings

# Create your models here.
#puedo reutilizar las clases para actulizar
class Project(models.Model):
    name = models.CharField(max_length=200)
    
#tambien agregar nuevos modelos
class Task(models.Model):
    #para limitar el campo
    title = models.CharField(max_length=200)
    #para texto largo
    description = models.TextField()
    #relacionar tablas, el on delete es para decirle que vamos hacer al eliminar undato en proyecto se eliminarian en cascada
    project = models.ForeignKey(Project, on_delete=models.CASCADE)