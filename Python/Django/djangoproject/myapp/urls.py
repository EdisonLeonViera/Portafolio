
from django.urls import path
from . import views

#esto debe ser si o si escrito asi
urlpatterns = [
    path('', views.hello),
    path('about/', views.about),
]