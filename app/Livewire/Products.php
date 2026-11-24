<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.app')]
class Products extends Component
{
    use WithPagination;

    public $productId = null;
    public $name = '';
    public $price = '';
    public $quantity = '';
    public $search = '';
    public $showModal = false;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ];
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function save()
    {
        $data = $this->validate();

        Product::updateOrCreate(['id' => $this->productId], $data);

        $this->resetForm();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->productId = $product->id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->quantity = $product->quantity;
        $this->showModal = true;
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
    }

    public function resetForm()
    {
        $this->reset(['productId', 'name', 'price', 'quantity', 'showModal']);
        $this->resetValidation();
    }

    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('livewire.products', compact('products'));
    }
}