<div>
    <form wire:submit.prevent="store">
    <input type="text" wire:model="title" placeholder="Judul">
    <textarea wire:model="description" placeholder="Deskripsi"></textarea>
    <input type="datetime-local" wire:model="due_date">
    <select wire:model="priority">
        <option value="">Pilih Prioritas</option>
        <option value="low">Rendah</option>
        <option value="medium">Sedang</option>
        <option value="high">Tinggi</option>
    </select>
    <input type="text" wire:model="category" placeholder="Kategori">
    <button type="submit">Simpan</button>
</form>
</div>
