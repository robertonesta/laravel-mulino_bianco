<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'img' => 'nullable|max:355',
            'price' => 'required',
            'description' => 'required|max:3000',
        ];

    }

    public function messages()
    {
        return [
            'title.required' => 'Ricorda di inserire un titolo per questo prodotto!',
            'title.min' => 'Il titolo deve contenere minimo 5 caratteri.',
            'title.max' => 'Il titolo deve contenere massimo 100 caratteri.',
            'img.required' => 'Ricorda di inserire un\'immagine per questo prodotto!',
            'img.max' => 'La lunghezza di caratteri dell\'immagine deve essere massimo di 355 caratteri',
            'price.required' => 'Ricorda di inserire un prezzo per questo prodotto!',
            'description.required' => 'Ricorda di inserire una descrizione per questo prodotto!',
            'description.max' => 'La lunghezza di caratteri della descrizione non può superarare 3000 caratteri',
        ];
    }
}
