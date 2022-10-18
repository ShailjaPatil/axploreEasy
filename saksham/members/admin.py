from django.contrib import admin

# Register your models here.
from .models import Product
from .models import tour
from .models import Pro


admin.site.register(Product)
admin.site.register(tour)
admin.site.register(Pro)
