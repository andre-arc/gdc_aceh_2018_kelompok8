** Aplikasi TransKutaRadjaLover



### Cara import data halte

* jalan kan local development Google App engine dengan perintah :
    ```sh
    dev_appserver.py app.yaml
    ```
* Kunjungi halaman berikut :
    ```sh
    localhost:8080/install
    ```
* dan data halte akan tersimpan pada datastore
    
### Cara load library Datastore

* taruh kode ini dimanapun ingin memanggil library datastore
    ```sh
    ...
    $this->datastore->load();
    ...
    ```

### Daftar Bug Aplikasi
* Login & Register belum bisa karena akses session pada direktori aplikasi di batasi oleh Google App Engine


#GDGAceh