<div>
    <div class="form-group row ">
        <div class="col-md-6">
        <label for="provinsi">Provinsi</label>
            <select wire:model="selectedProvinsi" class="form-control">
                <option value="" selected>Pilih Provinsi</option>
                @foreach($provinsi as $provinsis)
                    <option value="{{ $provinsis->id }}">{{ $provinsis->nm_provinsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
        <label for="positif">Jumlah Positif</label>
        <input type="text" value="@if(isset($tracking1)){{$tracking1->jumlah_positif}}@endif" class="form-control" name="jumlah_positif" required>
        </div>
    </div> 

        <div class="form-group row ">
            <div class="col-md-6">
    
            <label for="Kota">Kota</label>
                <select wire:model="selectedKota" class="form-control">
                    <option value="" selected>Pilih Kota</option>
                    @foreach($kota as $kotas)
                        <option value="{{ $kotas->id }}">{{ $kotas->nm_kota }}</option>
                    @endforeach
                </select>
   
            </div>
            <div class="col-md-6">
                <label for="sembuh">Jumlah Sembuh</label>
                <input type="text" class="form-control" value="@if(isset($tracking1)){{$tracking1->jumlah_sembuh}}@endif"  name="jumlah_sembuh" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    
            <label for="kecamatan">Kecamatan</label>
                <select wire:model="selectedKecamatan" class="form-control">
                    <option value="" selected>Pilih Kecamatan</option>
                    @foreach($kecamatan as $kecamatans)
                        <option value="{{ $kecamatans->id }}">{{ $kecamatans->nm_kecamatan }}</option>
                    @endforeach
                </select>
   
            </div>
            <div class="col-md-6">
                <label for="meninggal">Jumlah Meninggal</label>
                <input type="text" class="form-control" value="@if(isset($tracking1)){{$tracking1->jumlah_meninggal}}@endif" name="jumlah_meninggal" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    
            <label for="kelurahan" >Kelurahan</label>
                <select wire:model="selectedKelurahan" class="form-control">
                    <option value="" selected>Pilih Kelurahan</option>
                    @foreach($kelurahan as $kelurahans)
                        <option value="{{ $kelurahans->id }}">{{ $kelurahans->nm_kelurahan }}</option>
                    @endforeach
                </select>
   
            </div>
            <div class="col-md-6">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" value="@if(isset($tracking1)){{$tracking1->tanggal}}@endif"
                 name="tanggal" required>
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-md-6">
    
            <label for="rw" >Rw</label>
                <select wire:model="selectedRw" class="form-control" name="id_rw">
                    <option value="" selected>Pilih Rw</option>
                    @foreach($rw as $rws)
                        <option value="{{ $rws->id }}">{{ $rws->nm_rw }}</option>
                    @endforeach
                </select>
    
            </div>
        </div>
</div>