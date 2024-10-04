<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class productController extends Controller
{   
    // funcion para obtener todos los productos
    public function all_products(){
        $products = Product::all();

        if($products->isEmpty()){
            $data=[
                'message'=>'No hay productos por el momento',
                'status'=>200,
            ];
            response()->json($data,200);
        }

        $data=[
            'products'=>$products,
            'status'=>200
        ];

        return response()->json($data, 200);
    }

    // funcion para obtener un producto
    public function products_by_id($id){
        $product = Product::find($id);

        if(!$product){
            $data=[
                'message'=>'Producto no encontrado',
                'status'=> 404
            ];
            return response()->json($data,404);
        }

        $data=[
            'product'=>$product,
            'status'=>200,
        ];
        
        return response()->json($data,200);
    }

    // funcion para almacenar productos
    public function create_product(Request $request){
      
        $validator = validator::make($request->all(),[
            'Nombre' => 'required|string|min:1',
            'Descripción' => 'required|string|min:1',
            'Precio' => 'required|integer|min:1',
            'Stock' => 'required|integer|min:1',
        ]);

        if($validator->fails()){
            $data=[
                'menssage' => 'Error en la validacion de datos',
                'errors' => $validator->errors(),
                'status' => 400,
            ];
            return response()->json($data,400);
        }

        $product = Product::create([
            'Nombre' => $request->Nombre,
            'Descripción' => $request->Descripción,
            'Precio' => $request->Precio,
            'Stock' => $request->Stock
        ]);

        if(!$product){
            $data=[
                'message'=>'Error al almacenar un producto',
                'status' => 500,
            ];
            return response()->json($data,500);
        }

        $data=[
            'product'=>$product,
            'status'=>201,
        ];

        return response()->json($data,201);

    }


    // funcion para actualizar un objeto
     public function update_product(Request $request, $id){
        $product = Product::find($id);

        if(!$product){
            $data=[
                'message'=>'Producto no encontrado',
                'status'=> 404
            ];
            return response()->json($data,404);
        }

        $validator = validator::make($request->all(),[
            'Nombre' => 'string|min:1',
            'Descripción' => 'string|min:1',
            'Precio' => 'integer|min:1',
            'Stock' => 'integer|min:1',
        ]);

        if($validator->fails()){
            $data=[
                'menssage' => 'Error en la validacion de datos',
                'errors' => $validator->errors(),
                'status' => 400,
            ];
            return response()->json($data,400);
        }

        $input = $request->only(['Nombre', 'Descripción', 'Precio', 'Stock']);
        $product->fill($input);
        $product->save();
        $data = [
            'message' => 'Producto actualizado',
            'student' => $product,
            'status' => 200
        ];

        return response()->json($data, 200);

     }



    // funcion para eliminar productos
    public function delete_product($id){
        $product = Product::find($id);

        if(!$product){
            $data=[
                'message'=>'Producto a eliminar no encontrado',
                'status'=> 404
            ];
            return response()->json($data,404);
        }

        $product->delete();

        $data=[
            'message'=>'Producto eliminado con exito',
            'status'=>200
        ];

        return response()->json($data,200);

    }
}
