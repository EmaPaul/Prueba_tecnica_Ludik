from typing import Any
from django.core.management.base import BaseCommand
from apiProducts.models import Products

class Command(BaseCommand):
    Products.objects.all().delete()
    def handle(self, *args, **kwargs):
        Products.objects.create(Nombre='Producto 1', Descripción='Descripción del producto 1', Precio=99.99, Stock=10)
        Products.objects.create(Nombre='Producto 2', Descripción='Descripción del producto 2', Precio=199.99, Stock=5)
        Products.objects.create(Nombre='Producto 3', Descripción='Descripción del producto 3', Precio=299.99, Stock=20)
        Products.objects.create(Nombre='Producto 4', Descripción='Descripción del producto 4', Precio=149.99, Stock=8)
        Products.objects.create(Nombre='Producto 5', Descripción='Descripción del producto 5', Precio=249.99, Stock=15)
        Products.objects.create(Nombre='Producto 6', Descripción='Descripción del producto 6', Precio=349.99, Stock=12)
        Products.objects.create(Nombre='Producto 7', Descripción='Descripción del producto 7', Precio=89.99, Stock=30)
        Products.objects.create(Nombre='Producto 8', Descripción='Descripción del producto 8', Precio=179.99, Stock=7)
        Products.objects.create(Nombre='Producto 9', Descripción='Descripción del producto 9', Precio=399.99, Stock=3)
        Products.objects.create(Nombre='Producto 10', Descripción='Descripción del producto 10', Precio=459.99, Stock=9)

        self.stdout.write(self.style.SUCCESS('Datos insertados correctamente'))