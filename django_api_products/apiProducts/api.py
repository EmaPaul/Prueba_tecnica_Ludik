from .models import Products
from rest_framework import viewsets, permissions
from .serializers import ProductSerializer

class ProductsViewSet(viewsets.ModelViewSet):
    queryset = Products.objects.all()
    permission_classes = [permissions.AllowAny]
    serializer_class = ProductSerializer
