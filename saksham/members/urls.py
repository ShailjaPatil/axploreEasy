from django.contrib import admin
from django.urls import path
from .import views

urlpatterns = [
    path('', views.index, name='index'),
    path('event/', views.event, name='event'),
    path('travel/', views.travel, name='travel'),
    path('eventform/', views.eventform, name='eventform'),
    path('eventdesc/', views.eventdesc, name='eventdesc'),
    

    
    
]