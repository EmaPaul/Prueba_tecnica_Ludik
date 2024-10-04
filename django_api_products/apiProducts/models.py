from django.db import models
from django.core.validators import MinLengthValidator

# Create your models here.
class Products(models.Model):
    Nombre = models.CharField( max_length=255,validators=[MinLengthValidator(1)])  
    Descripción = models.CharField( max_length=255,validators=[MinLengthValidator(1)])  
    Precio = models.IntegerField() 
    Stock = models.IntegerField()  
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now_add=True)