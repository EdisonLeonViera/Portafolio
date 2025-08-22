"""
URL configuration for mysite project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/5.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
#importamos include
from django.urls import path, include

#include sirve para incluir un bloque de urls a partir de una aplicacion
urlpatterns = [
    path('admin/', admin.site.urls),
    #el string vacio es por que no llevan nada ejemplo local/about o local/, en nuestro ejemplo pero si quisieramos hacerlo como una sub carpeta la alteramos desde aca
    #cada app debe tener una url como esta
    #ejemplo darle categorias
    #mejor lo dejamos con algo pero puede ir vacio
    path('', include('myapp.urls')),
]

#sigue en instrucciones 2 en migraciones