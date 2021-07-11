<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

    public function index()
    {
        $this->db->trans_begin();
        $kecamatan = $this->requestt('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=9171');
        foreach ($kecamatan->kecamatan as $key => $value) {
            $this->db->insert('kecamatan', ['nama'=>$value->nama]);
            $id = $this->db->insert_id();
            $url = "https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=".$value->id;
            $kelurahan = $this->requestt($url);
            foreach ($kelurahan->kelurahan as $key1 => $item) {
                $set = [
                    'nama'=>$item->nama,
                    'kecamatanid'=>$id
                ];
                $this->db->insert("kelurahan", $set);
            }
        }
        if($this->db->trans_status()){
            $this->db->trans_commit();
            echo "Sukses";
        }else{
            $this->db->trans_rollback();
            echo "Gagal";
        }
        
    }

    public function requestt($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        ]);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            curl_close($curl);
            return json_decode($response);
        }
    }

}

/* End of file Kecamatan.php */