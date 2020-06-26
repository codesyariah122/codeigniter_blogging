<div class="container">       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary" style="font-family: 'Bilbo Swash Caps', cursive;"><?=$uri_title?></h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="display responsive" style="width:100%">
              <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode</th>
                      <th>Image</th>
                      <th>Nama</th>
                      <th>Nomor Pom</th>
                      <th>Harga Mitra</th>
                      <th>Harga Non Mitra</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach($price_list as $p):?>
                    <tr>
                    <td><?=$no?></td>
                    <td><?=$p->kode?></td>
                    <td><img src="<?=base_url()?>assets/images/produk/<?=($p->image == NULL) ? 'slider17.jpg' : $p->image ;?>" width="150" height="100"/></td>
                    <td><?=$p->nama?></td>
                    <td><?=$p->nomorpom?></td>
                    <td width="130"><?="Rp. ".number_format($p->mitra, 2)?></td>
                    <td><?="Rp. ".number_format($p->nonmitra, 2)?></td>
                    </tr>
                  <?php $no++; endforeach;?>
                </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
    </div>


