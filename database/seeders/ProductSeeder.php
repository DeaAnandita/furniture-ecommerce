<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Material;
use App\Models\Style;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CATEGORY
        $chair = Category::where('name', 'Chair')->first();
        $table = Category::where('name', 'Table')->first();
        $sofa = Category::where('name', 'Sofa')->first();
        $bed = Category::where('name', 'Bed')->first();
        $lamp = Category::where('name', 'Lamp')->first();
        $cabinet = Category::where('name', 'Cabinet')->first();
        $dining = Category::where('name', 'Dining Set')->first();
        $shelf = Category::where('name', 'Shelf')->first();

        // MATERIAL
        $wood = Material::where('name', 'Wood')->first();
        $aluminium = Material::where('name', 'Aluminium')->first();
        $metal = Material::where('name', 'Metal')->first();
        $glass = Material::where('name', 'Glass')->first();
        $steel = Material::where('name', 'Steel')->first();
        $marble = Material::where('name', 'Marble')->first();
        $leather = Material::where('name', 'Leather')->first();
        $fabric = Material::where('name', 'Fabric')->first();

        // STYLE
        $minimalist = Style::where('name', 'Minimalist')->first();
        $modern = Style::where('name', 'Modern')->first();
        $scandinavian = Style::where('name', 'Scandinavian')->first();
        $industrial = Style::where('name', 'Industrial')->first();
        $japandi = Style::where('name', 'Japandi')->first();
        $classic = Style::where('name', 'Classic')->first();
        $luxury = Style::where('name', 'Luxury')->first();
        $contemporary = Style::where('name', 'Contemporary')->first();

        Product::create([
            'name' => 'Minimalist Wooden Chair',
            'description' => 'Elegant wooden chair suitable for modern interiors.',
            'price' => 850000,
            'stock' => 12,
            'image' => 'chair.jpeg',
            'category_id' => $chair?->id,
            'material_id' => $wood?->id,
            'style_id' => $japandi?->id,
        ]);

        Product::create([
            'name' => 'Modern Coffee Table',
            'description' => 'Scandinavian coffee table with elegant design.',
            'price' => 1500000,
            'stock' => 8,
            'image' => 'table.jpg',
            'category_id' => $table?->id,
            'material_id' => $wood?->id,
            'style_id' => $scandinavian?->id,
        ]);

        Product::create([
            'name' => 'Luxury Sofa Cream',
            'description' => 'Comfortable luxury sofa with soft fabric.',
            'price' => 4200000,
            'stock' => 5,
            'image' => 'sofa.jpg',
            'category_id' => $sofa?->id,
            'material_id' => $fabric?->id,
            'style_id' => $luxury?->id,
        ]);

        Product::create([
            'name' => 'Wooden Bed Frame',
            'description' => 'Minimalist bed frame with natural wood texture.',
            'price' => 3500000,
            'stock' => 4,
            'image' => 'bed.jpg',
            'category_id' => $bed?->id,
            'material_id' => $wood?->id,
            'style_id' => $minimalist?->id,
        ]);

        Product::create([
            'name' => 'Decorative Standing Lamp',
            'description' => 'Modern standing lamp for elegant room decoration.',
            'price' => 650000,
            'stock' => 15,
            'image' => 'lamp.jpg',
            'category_id' => $lamp?->id,
            'material_id' => $metal?->id,
            'style_id' => $modern?->id,
        ]);

        Product::create([
            'name' => 'Industrial Dining Table',
            'description' => 'Industrial dining set with steel frame.',
            'price' => 5200000,
            'stock' => 3,
            'image' => 'diningtable.jpg',
            'category_id' => $dining?->id,
            'material_id' => $steel?->id,
            'style_id' => $industrial?->id,
        ]);

        Product::create([
            'name' => 'Elegant Lounge Chair',
            'description' => 'Comfortable lounge chair with elegant style.',
            'price' => 1750000,
            'stock' => 7,
            'image' => 'loungechair.jpg',
            'category_id' => $chair?->id,
            'material_id' => $leather?->id,
            'style_id' => $luxury?->id,
        ]);

        Product::create([
            'name' => 'Minimalist TV Cabinet',
            'description' => 'TV cabinet with modern minimalist design.',
            'price' => 2400000,
            'stock' => 6,
            'image' => 'cabinet.jpg',
            'category_id' => $cabinet?->id,
            'material_id' => $wood?->id,
            'style_id' => $minimalist?->id,
        ]);

        Product::create([
            'name' => 'Modern Workspace Desk',
            'description' => 'Elegant desk for productive workspace.',
            'price' => 2800000,
            'stock' => 9,
            'image' => 'desk.jpg',
            'category_id' => $table?->id,
            'material_id' => $wood?->id,
            'style_id' => $modern?->id,
        ]);

        Product::create([
            'name' => 'Luxury King Bed',
            'description' => 'Premium king bed with classy luxury design.',
            'price' => 6800000,
            'stock' => 2,
            'image' => 'kingbed.jpg',
            'category_id' => $bed?->id,
            'material_id' => $fabric?->id,
            'style_id' => $luxury?->id,
        ]);
    }
}