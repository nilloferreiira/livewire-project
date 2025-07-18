@extends('layouts.app')

@section('content')
    <div>
        <div class="d-flex items-center justify-between">
            <h1>Estoque</h1>
            {{-- create new fruits  --}}
            <form onsubmit="SendByAjax(event)">
                <input class="p-2" type="text" name="name" placeholder="Digite o nome da fruta">
                <input class="p-2" type="number" name="quantity" placeholder="Digite a quantidade no estoque">
                <button type="submit">Criar</button>
            </form>

            <script>
                function SendByAjax(event) {
                    event.preventDefault()

                    let form = event.target
                    let url = 'http://localhost:8000/stock'

                    let formData = new FormData(form)
                    for (let pair of formData.entries()) {
                        console.log(pair[0] + ': ' + pair[1]);
                    }
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: formData,
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            form.reset()
                            Livewire.emit('fruitCreated')
                        },
                        error: function(xhr) {
                            alert('Erro ao criar a fruta: ' + xhr.responseText)
                        }
                    })

                }
            </script>
        </div>
        <livewire:stock-list />
    </div>
@endsection
