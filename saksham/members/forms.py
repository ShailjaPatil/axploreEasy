from django import forms  
from .models import Pro
from .models import Product
from django.forms import ModelForm
  
class EventForm(forms.ModelForm):  
    class Meta:  
        model = Product
        fields =  '__all__'  