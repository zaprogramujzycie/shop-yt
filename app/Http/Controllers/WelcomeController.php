<?php

namespace App\Http\Controllers;

use App\Enums\ProductSortParams;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View|JsonResponse
    {
        $filters = $request->query('filter');

        $paginate = $request->query('paginate') ?? 5;

        $orderBy = $request->query('orderBy')?? ProductSortParams::NAME; /*reading orderBy parameter from request
                                                                             and setting default value just in case  */

        $query = Product::query();
        if (!is_null($filters)) {
            if (array_key_exists('categories', $filters)) {
                $query = $query->whereIn('category_id', $filters['categories']);
            }
            if (!is_null($filters['price_min'])) {
                $query = $query->where('price', '>=', $filters['price_min']);
            }
            if (!is_null($filters['price_max'])) {
                $query = $query->where('price', '<=', $filters['price_max']);
            }
            /* in response added orderBy() method on query with our $orderBy parameter*/
            return response()->json($query->orderBy($orderBy)->paginate($paginate));
        }

        return view("welcome", [
            'products' => $query->paginate($paginate),
            'categories' => ProductCategory::orderBy('name', 'ASC')->get(),
            'defaultImage' => 'https://via.placeholder.com/240x240/5fa9f8/efefef',
            'sortParams' => ProductSortParams::PARAMS, /*sending sortParams from newly created enum*/
        ]);
    }
}
