from contextlib import _RedirectStream
from django.shortcuts import render
from django.http import HttpResponse

from members.forms import EventForm
from .models import Product
from .models import tour
from math import ceil


def index(request):
    return render(request, 'Home.html')
def event(request):
     # products = Product.objects.all()
    # print(products)
    # n = len(products)
    # nSlides = n//4 + ceil((n/4)-(n//4))

    allProds = []
    catprods = Product.objects.values('category', 'id')
    cats = {item['category'] for item in catprods}
    for cat in cats:
        prod = Product.objects.filter(category=cat)
        n = len(prod)
        nSlides = n // 4 + ceil((n / 4) - (n // 4))
        allProds.append([prod, range(1, nSlides), nSlides])

    # params = {'no_of_slides':nSlides, 'range': range(1,nSlides),'product': products}
    # allProds = [[products, range(1, nSlides), nSlides],
    #             [products, range(1, nSlides), nSlides]]
    params = {'allProds':allProds}
    return render(request, 'event.html', params)

def travel(request):
    #tours = tour.objects.all()
    #print(tours)
    #n = len(tours)
    #nSlides = n//4 + ceil((n/4)-(n//4))

    alltos = []
    cattos = tour.objects.values('category', 'id')
    cats = {item['category'] for item in cattos}
    for cat in cats:
        to = tour.objects.filter(category=cat)
        n = len(to)
        nSlides = n // 4 + ceil((n / 4) - (n // 4))
        alltos.append([to, range(1, nSlides), nSlides])

    # params = {'no_of_slides':nSlides, 'range': range(1,nSlides),'product': products}
    # allProds = [[products, range(1, nSlides), nSlides],
    #             [products, range(1, nSlides), nSlides]]
    params = {'alltos':alltos}
    
   
    return render(request, 'travel.html', params)

def eventform(request):
  if request.method == "POST":
    form = EventForm(request.POST, request.FILES)
    if form.is_valid():
      form.save()
      img_object = form.instance  
      return render(request, 'eventform.html', {'form': form, 'img_obj': img_object})  
  else:
      form = EventForm()
  return render(request, 'eventform.html', {'form': form})


def eventdesc(request):
    return render(request, 'eventdesc.html')
  
