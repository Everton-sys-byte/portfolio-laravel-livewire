<div class="row">
    <div class="col-12 col-lg-9 mx-auto">
        <form wire:submit.prevent="submit">
            <div class="row">
                <div class="col-12">
                    <input class="form-control @error('name') is-invalid @enderror" placeholder="Nome"
                        wire:model.lazy="name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 mt-3 ">
                    <input class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        wire:model.lazy="email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 mt-3 ">
                    <textarea class="form-control @error('message') is-invalid @enderror" rows="5"
                        placeholder="Mensagem" wire:model.lazy="message"></textarea>
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 text-end">
                    <button class="btn btn-primary mt-3" type="submit"><i class="fa-solid fa-paper-plane"></i> Enviar
                        mensagem</button>
                </div>
            </div>
        </form>
    </div>
</div>
