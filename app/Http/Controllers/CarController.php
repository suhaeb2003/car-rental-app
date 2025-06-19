<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    public function allcars()
    {
        $popularCars = Car::where('car_status', 'popular')->get();
        $normalCars = Car::where('car_status', 'normal')->get();
        $newCars = Car::where('car_status', 'new')->get();
        return view('pages.AllCar', compact('popularCars', 'normalCars', 'newCars'));
    }
    public function addcar(Request $request)
    {
        try {
            $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'total_car' => 'required',
            'car_status' => 'required',
            'daily_rental_price' => 'required',
            'availability' => 'required',
            'price' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
        ]);

        $addCar = Car::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'total_car' => $request->total_car,
            'car_status' => $request->car_status,
            'daily_rental_price' => $request->daily_rental_price,
            'availability' => $request->availability,
            'price' => $request->price,
            'image' => $request->image
        ]);

        $imageFile = $request->file('image');
        if ($imageFile) {
            $image_name = time() . "." . $imageFile->getClientOriginalExtension();
            $addCar->image = $image_name;
            $imageFile->move(public_path('assets/images'), $image_name);
            $addCar->save();
        }
        if ($addCar) {
            return response()->json([
                'message' => 'Car added successfully',
                'car' => $addCar
            ]);
        } else {
            return response()->json([
                'message' => 'Car not added'
            ]);
        }
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function updateCar(Request $request)
    {   
        $Id= $request->id;
        $findCar = Car::where('id', $Id)->first();
        if (!$findCar) {
            return response()->json([
                'message' => 'Car Not Found'
            ]);
        }
        if($request ->hasFile('image')) {
                //`name`, `brand`, `model`, `year`, `total_car`, `car_type`, `daily_rental_price`, `availability`, `car_status`, `image`
                $request->validate([
                    'name' => 'required',
                    'brand' => 'required',
                    'model' => 'required',
                    'year' => 'required',
                    'total_car' => 'required',
                    'daily_rental_price' => 'required',
                    'availability' => 'required',
                    'car_status' => 'required',
                    'price' => 'required',
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
                ]);
                
                $imageFile = $request->file('image');
                $image_name = time() . "." . $imageFile->getClientOriginalExtension();
                // $imageFile->move(public_path('assets/images'), $image_name);
                if($findCar->image){
                    File::delete(public_path('assets/images/'.$findCar->image));
                }
                $updateCar = Car::where('id', $Id)->update([
                    'name' => $request->name,
                    'brand' => $request->brand,
                    'model' => $request->model,
                    'year' => $request->year,
                    'total_car' => $request->total_car,
                    'daily_rental_price' => $request->daily_rental_price,
                    'availability' => $request->availability,
                    'car_status' => $request->car_status,
                    'price' => $request->price,
                    'image' => $image_name
                ]);
                if ($updateCar) {
                    $imageFile->move(public_path('assets/images'), $image_name);
                    return response()->json([
                        'message' => 'Car updated successfully',
                        'car' => $updateCar
                    ]);
                } else {
                    return response()->json([
                        'message' => 'Car not updated'
                    ]);
                }

            }else{
                $request->validate([
                    'name' => 'required',
                    'brand' => 'required',
                    'model' => 'required',
                    'year' => 'required',
                    'total_car' => 'required',
                    'daily_rental_price' => 'required',
                    'availability' => 'required',
                    'car_status' => 'required',
                    'price' => 'required',
                ]);
                $updateCar = Car::where('id', $Id)->update([
                    'name' => $request->name,
                    'brand' => $request->brand,
                    'model' => $request->model,
                    'year' => $request->year,
                    'total_car' => $request->total_car,
                    'daily_rental_price' => $request->daily_rental_price,
                    'availability' => $request->availability,
                    'car_status' => $request->car_status,
                    'price' => $request->price,
                ]);
                if ($updateCar) {
                    return response()->json([
                        'message' => 'Car updated successfully',
                        'car' => $updateCar
                    ]);
                } else {
                    return response()->json([
                        'message' => 'Car not updated'
                    ]);
                }
            }
        
    }

    public function getAllCars(Request $request)
    {
        $cars = Car::all();
        return response()->json([
            'status' => true,
            'cars' => $cars
        ]);
    }

    public function deleteCar(Request $request)
    {
        $car = Car::findOrFail($request->id);
        $car->delete();
        return response()->json([
            'message' => 'Car deleted successfully'
        ]);
    }
}
