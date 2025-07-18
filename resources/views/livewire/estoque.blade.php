<div>
    {{-- Estoque de frutas: {{ $fruit->quantity }} --}}
    Banana: @livewire('show-fruit-stock', ['quantity' => $fruit->quantity], key($fruit->id))
    <div>
        <button wire:click="increment">
            Aumentar estoque + 1
        </button>
        <button wire:click="decrement">
            Diminuir estoque - 1
        </button>
    </div>
    {{-- create new fruits  --}}
    <form onsubmit="SendByAjax(event)">
        <input type="text" name="name" placeholder="Digite o nome da fruta">
        <input type="number" name="quantity" placeholder="Digite a quantidade no estoque">
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
                    alert(response.message)
                    form.reset()
                },
                error: function(xhr) {
                    alert('Erro ao criar a fruta: ' + xhr.responseText)
                }
            })

        }
    </script>

</div>
