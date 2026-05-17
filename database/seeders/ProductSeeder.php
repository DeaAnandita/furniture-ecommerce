<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Minimalist Wooden Chair',
            'description' => 'Elegant minimalist chair with premium wood material suitable for modern interiors.',
            'price' => 850000,
            'stock' => 12,
            'image' => 'chair.jpeg',
            'category' => 'Chair',
            'material' => 'Oak Wood',
            'style' => 'Japandi',
        ]);

        Product::create([
            'name' => 'Modern Coffee Table',
            'description' => 'Stylish coffee table with clean Scandinavian design for your living room.',
            'price' => 1500000,
            'stock' => 8,
            'image' => 'table.jpg',
            'category' => 'Table',
            'material' => 'Solid Wood',
            'style' => 'Scandinavian',
        ]);

        Product::create([
            'name' => 'Luxury Sofa Cream',
            'description' => 'Comfortable cream sofa with modern minimalist aesthetic.',
            'price' => 4200000,
            'stock' => 5,
            'image' => 'sofa.jpg',
            'category' => 'Sofa',
            'material' => 'Premium Fabric',
            'style' => 'Modern Luxury',
        ]);

        Product::create([
            'name' => 'Wooden Bed Frame',
            'description' => 'Minimalist wooden bed frame perfect for cozy bedrooms.',
            'price' => 3500000,
            'stock' => 4,
            'image' => 'bed.jpg',
            'category' => 'Bedroom',
            'material' => 'Teak Wood',
            'style' => 'Japandi',
        ]);

        Product::create([
            'name' => 'Decorative Standing Lamp',
            'description' => 'Warm standing lamp for modern home decoration.',
            'price' => 650000,
            'stock' => 15,
            'image' => 'lamp.jpg',
            'category' => 'Decoration',
            'material' => 'Metal & Wood',
            'style' => 'Modern',
        ]);
    }
}