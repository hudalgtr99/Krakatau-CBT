<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\105\x50\x41\x54\110") or exit("\x4e\x6f\40\x64\x69\162\x65\x63\164\40\x73\143\162\x69\x70\164\40\x61\x63\143\x65\x73\163\40\141\x6c\x6c\157\167\x65\x64"); class Datakelas extends CI_Controller { public function __construct() { goto CpYGx; x7CV2: if ($this->ion_auth->is_admin()) { goto wVzwF; } goto i7E4m; iDFI7: $this->load->model("\115\x61\163\x74\145\162\x5f\x6d\157\x64\145\154", "\x6d\141\163\x74\x65\x72"); goto mLTH3; tZFoj: wVzwF: goto ZHXWW; i7E4m: show_error("\110\x61\x6e\171\x61\x20\x41\144\x6d\x69\x6e\151\163\164\x72\x61\x74\x6f\x72\x20\171\141\x6e\147\x20\x64\x69\x62\x65\162\151\40\150\141\x6b\x20\165\156\164\x75\x6b\x20\155\145\156\x67\x61\153\163\x65\x73\x20\150\x61\x6c\x61\155\141\156\x20\151\156\151\54\40\74\141\40\x68\162\x65\x66\75\x22" . base_url("\144\141\163\150\142\157\141\x72\x64") . "\42\76\x4b\145\x6d\x62\141\154\151\x20\153\145\40\x6d\145\x6e\x75\x20\141\167\x61\154\x3c\57\x61\76", 403, "\x41\153\x73\x65\163\40\124\x65\162\154\141\x72\141\156\147"); goto tZFoj; O0TAi: redirect("\141\x75\x74\150"); goto bFos_; xkYIm: $this->load->model("\x4b\x65\x6c\x61\163\137\155\x6f\144\145\x6c", "\x6b\145\154\141\163"); goto xNDdM; mLTH3: $this->load->model("\104\162\157\x70\x64\x6f\x77\x6e\x5f\155\157\x64\x65\x6c", "\144\162\157\x70\144\x6f\x77\156"); goto WaA97; ZHXWW: goto oJ7C0; goto mmuFx; mmuFx: v7Ozu: goto O0TAi; xNDdM: $this->load->model("\x44\141\163\150\142\x6f\141\x72\144\137\x6d\157\144\145\x6c", "\x64\141\x73\x68\142\x6f\141\162\x64"); goto iDFI7; bFos_: oJ7C0: goto Nd2_6; Nd2_6: $this->load->library(["\x64\141\x74\141\164\x61\x62\154\145\x73", "\146\157\x72\155\137\166\x61\154\x69\x64\141\164\x69\x6f\156"]); goto xkYIm; al0ge: if (!$this->ion_auth->logged_in()) { goto v7Ozu; } goto x7CV2; q8iQz: $this->form_validation->set_error_delimiters('', ''); goto YGsJz; CpYGx: parent::__construct(); goto al0ge; WaA97: $this->load->model("\x52\x61\x70\x6f\x72\137\x6d\x6f\144\x65\x6c", "\162\141\160\157\162"); goto q8iQz; YGsJz: } public function output_json($data, $encode = true) { goto m7jkN; Wj9Y1: $data = json_encode($data); goto Vb3DU; Vb3DU: T4uIN: goto L3lLp; m7jkN: if (!$encode) { goto T4uIN; } goto Wj9Y1; L3lLp: $this->output->set_content_type("\141\160\160\x6c\x69\x63\x61\164\151\x6f\x6e\57\152\x73\157\156")->set_output($data); goto zIvad; zIvad: } public function index() { goto xcfMC; PG_P4: $data["\x6a\165\162\x75\163\x61\x6e"] = $this->kelas->get_jurusan(); goto wWo1Z; uBKZx: $smt = $this->dashboard->getSemesterActive(); goto q4CsE; k8O6y: if (!($chek > 0)) { goto Poe4h; } goto x4W5e; I88id: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto DWNf6; hnJsN: $kelas_lama = $this->kelas->getKelasList($tp->id_tp - 1, "\62"); goto IoOey; alTcy: $kelas = []; goto HStdA; Ows3Y: $setting = $this->dashboard->getSetting(); goto BJD4K; JMKeT: $data["\164\160\x5f\141\x63\x74\x69\166\x65"] = $tp; goto I88id; q4CsE: $data["\x74\160"] = $this->dashboard->getTahun(); goto JMKeT; x4W5e: $kelas = $this->kelas->getKelasList($tp->id_tp, $smt->id_smt); goto hnJsN; HStdA: $kelas_lama = []; goto k8O6y; JJQb0: $this->load->view("\137\x74\x65\155\160\x6c\x61\164\145\163\57\144\x61\163\x68\142\x6f\x61\162\x64\57\137\146\x6f\x6f\x74\x65\x72"); goto m5aZ9; b1VC0: $this->load->view("\155\141\x73\164\x65\162\x2f\153\x65\x6c\x61\x73\x2f\144\x61\164\x61"); goto JJQb0; jiscf: $this->load->view("\137\164\145\x6d\160\x6c\x61\164\x65\x73\x2f\144\x61\163\150\x62\157\x61\162\144\57\x5f\150\x65\x61\144\x65\x72", $data); goto b1VC0; CJdHX: $data["\x73\x69\163\167\x61"] = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto jiscf; J9aAd: $data["\x6b\145\x6c\x61\163"] = $kelas; goto zQYFX; xcfMC: $user = $this->ion_auth->user()->row(); goto Ows3Y; zQYFX: $data["\x6b\145\154\x61\x73\x5f\154\141\155\x61"] = $kelas_lama; goto PG_P4; C08aa: $chek = $this->kelas->count_all(); goto alTcy; wWo1Z: $data["\154\145\166\145\154"] = $this->kelas->getLevel($setting->jenjang); goto D0Q1h; IoOey: Poe4h: goto J9aAd; D0Q1h: $data["\147\x75\162\165"] = $this->kelas->get_guru(); goto CJdHX; DWNf6: $data["\x73\155\x74\x5f\x61\143\x74\151\166\145"] = $smt; goto PpZ4s; PpZ4s: $data["\160\162\x6f\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto C08aa; BJD4K: $data = ["\165\163\145\x72" => $user, "\x6a\165\x64\x75\x6c" => "\x4b\145\x6c\x61\163", "\163\x75\x62\152\x75\x64\x75\x6c" => "\104\x61\164\x61\40\x4b\145\154\141\x73", "\163\x65\164\x74\x69\156\x67" => $setting]; goto KYmqN; KYmqN: $tp = $this->dashboard->getTahunActive(); goto uBKZx; m5aZ9: } public function detail($id) { goto pTenc; UQpms: $smt = $this->dashboard->getSemesterActive(); goto QusGj; aUDeA: fDDz5: goto iIfj4; CDmD0: goto FWLof; goto aUDeA; x06h9: $data["\x67\165\x72\x75"] = $this->kelas->get_guru(); goto XnZcM; G4xUV: $data = ["\x75\163\x65\162" => $user, "\x6a\165\x64\x75\154" => "\x44\x65\164\x61\151\154\x20\113\145\154\141\163", "\163\165\142\x6a\165\x64\165\x6c" => "\104\145\164\x61\151\154\40\113\145\x6c\x61\x73", "\x73\x65\164\x74\151\156\147" => $setting]; goto n0uj4; h30O8: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto Nsm6E; iIfj4: $data["\163\164\x72\165\x6b\x74\165\x72"] = json_decode(json_encode($this->kelas->dummyStruktur())); goto n24rH; nue0H: $data["\160\162\157\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto iYIly; SVKQO: $this->load->view("\x5f\164\145\155\x70\x6c\x61\x74\x65\163\x2f\144\141\163\x68\142\x6f\x61\x72\144\57\137\x68\145\141\x64\145\162", $data); goto LELR5; bmdJH: $data["\x73\x74\162\x75\x6b\164\x75\x72"] = $struktur; goto CDmD0; WnHbg: $data["\154\x65\x76\145\x6c"] = $this->kelas->getLevel($setting->jenjang); goto x06h9; QusGj: $data["\164\x70"] = $this->dashboard->getTahun(); goto fDqLS; XnZcM: $data["\163\151\163\167\141\x73"] = $this->kelas->get_siswa_kelas($id, $tp->id_tp, $smt->id_smt); goto MiiJQ; n0uj4: $tp = $this->dashboard->getTahunActive(); goto UQpms; n24rH: FWLof: goto SVKQO; MiiJQ: $struktur = $this->kelas->getStrukturKelas($id); goto MDuJC; YEXF1: $data["\x6a\165\x72\165\x73\x61\156"] = $this->kelas->get_jurusan(); goto WnHbg; BmQ0z: $setting = $this->dashboard->getSetting(); goto G4xUV; MDuJC: if ($struktur == null) { goto fDDz5; } goto bmdJH; Nsm6E: $data["\x73\155\x74\137\x61\x63\x74\x69\166\x65"] = $smt; goto nue0H; fDqLS: $data["\x74\160\x5f\141\x63\164\x69\x76\x65"] = $tp; goto h30O8; iYIly: $data["\x6b\145\x6c\x61\163"] = $this->kelas->get_one($id); goto YEXF1; xsEga: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\x74\145\163\x2f\144\x61\x73\150\142\157\x61\x72\x64\x2f\x5f\x66\157\157\x74\145\x72"); goto REalX; pTenc: $user = $this->ion_auth->user()->row(); goto BmQ0z; LELR5: $this->load->view("\155\x61\163\164\x65\x72\x2f\153\145\154\141\x73\x2f\x64\145\x74\141\151\x6c"); goto xsEga; REalX: } public function add() { goto fIBd2; rYeGr: $data = ["\165\x73\x65\x72" => $user, "\x6a\165\x64\165\154" => "\x4b\145\x6c\x61\163", "\163\x75\x62\152\x75\x64\165\154" => "\x54\141\155\142\141\150\40\x4b\x65\x6c\141\x73", "\163\145\164\164\x69\156\x67" => $setting]; goto EOBGZ; AB29k: $setting = $this->dashboard->getSetting(); goto rYeGr; sFzyB: $this->load->view("\x6d\x61\163\164\145\162\57\153\x65\x6c\141\x73\57\141\x64\144"); goto B2g2J; wPQuN: $data["\163\155\164\x5f\141\143\164\151\x76\145"] = $smt; goto jMtdp; VJaw6: $this->load->view("\137\x74\145\x6d\x70\154\x61\164\145\163\x2f\144\141\163\150\142\157\141\x72\x64\x2f\137\150\145\x61\144\x65\162", $data); goto sFzyB; UYZJs: $data["\147\x75\162\x75"] = $this->kelas->get_guru(); goto CCb_p; Fw1mR: $data["\x6a\x75\x72\x75\163\x61\156"] = $this->kelas->get_jurusan(); goto FlUjn; fIBd2: $user = $this->ion_auth->user()->row(); goto AB29k; B2g2J: $this->load->view("\137\164\x65\155\160\x6c\141\164\145\163\x2f\x64\x61\x73\x68\142\x6f\141\x72\x64\57\137\x66\157\157\x74\145\x72"); goto Erza1; g7jX1: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto wPQuN; CCb_p: $siswa = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto zQ3tm; zQ3tm: $data["\x73\151\x73\x77\141"] = $siswa; goto kUx91; FlUjn: $data["\x6c\x65\x76\145\154"] = $this->kelas->getLevel($setting->jenjang); goto UYZJs; U8jgM: $smt = $this->dashboard->getSemesterActive(); goto eWQiZ; eWQiZ: $data["\x74\160"] = $this->dashboard->getTahun(); goto co4kv; jMtdp: $data["\160\x72\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto o2i8s; EOBGZ: $tp = $this->dashboard->getTahunActive(); goto U8jgM; co4kv: $data["\x74\x70\x5f\141\143\164\x69\x76\x65"] = $tp; goto g7jX1; o2i8s: $data["\x6b\145\154\x61\163"] = json_decode(json_encode($this->kelas->dummy())); goto Fw1mR; kUx91: $data["\x73\x69\163\x77\x61\x6b\145\x6c\x61\163"] = array(); goto VJaw6; Erza1: } public function edit($id = '') { goto edLH0; DR31q: $data = ["\x75\163\145\162" => $user, "\152\x75\x64\x75\154" => "\x4b\145\154\x61\x73", "\163\165\142\x6a\165\144\x75\x6c" => "\x45\x64\151\x74\x20\113\x65\x6c\141\x73", "\163\145\164\164\151\x6e\x67" => $setting]; goto WdMlo; SNW5a: $setting = $this->dashboard->getSetting(); goto DR31q; bEW9o: $this->load->view("\x5f\164\145\155\x70\x6c\141\x74\x65\x73\x2f\x64\x61\163\x68\142\x6f\x61\162\x64\x2f\137\x66\x6f\x6f\x74\145\x72"); goto UEPu2; WEUOy: $data["\151\144\x5f\153\x65\x6c\141\x73"] = $id; goto mXiPz; htRi8: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto jYYyl; jY87o: $data["\147\x75\162\165"] = $this->kelas->getWaliKelas($tp->id_tp, $smt->id_smt); goto hfClz; kiJfE: $data["\x70\x72\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto WEUOy; bwUuW: $data["\164\x70\x5f\x61\x63\x74\151\166\145"] = $tp; goto htRi8; edLH0: $user = $this->ion_auth->user()->row(); goto SNW5a; FIYBI: $this->load->view("\x6d\141\163\x74\x65\162\x2f\x6b\x65\x6c\141\x73\57\141\x64\x64"); goto bEW9o; Fxdpr: $smt = $this->dashboard->getSemesterActive(); goto C6EON; tKyP4: $data["\x6a\165\x72\165\x73\141\156"] = $this->kelas->get_jurusan(); goto sXTma; mXiPz: $data["\153\145\x6c\141\x73"] = $this->kelas->get_one($id); goto tKyP4; jYYyl: $data["\x73\x6d\164\x5f\141\x63\164\151\x76\145"] = $smt; goto kiJfE; WdMlo: $tp = $this->dashboard->getTahunActive(); goto Fxdpr; hfClz: $data["\163\x69\163\167\x61"] = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto jOlmJ; C6EON: $data["\164\x70"] = $this->dashboard->getTahun(); goto bwUuW; sXTma: $data["\x6c\x65\166\x65\x6c"] = $this->kelas->getLevel($setting->jenjang); goto jY87o; Z5tZY: $this->load->view("\x5f\x74\x65\x6d\160\x6c\x61\x74\145\x73\57\x64\x61\163\x68\142\157\141\x72\x64\x2f\137\150\145\x61\144\145\162", $data); goto FIYBI; jOlmJ: $data["\x73\151\163\x77\141\x6b\145\154\141\x73"] = $this->kelas->get_siswa_kelas($id, $tp->id_tp, $smt->id_smt); goto Z5tZY; UEPu2: } public function save() { goto svJRl; rxmqe: $id_new = null; goto I89Uf; zOCh8: l28Zf: goto OWHpT; sT2Oj: $new_id_kelas = $id != null && $id != '' ? $id : $id_new; goto PVqOu; OWHpT: if (!($i <= count($siswas))) { goto i1USS; } goto GlYbu; PVqOu: if (!($idsiswa != null)) { goto UY85d; } goto FPukz; g_v9s: $insert[$id_tp . $id_smt . $idsiswa]["\x69\x64\x5f\153\145\154\141\x73"] = $new_id_kelas; goto I8xDV; e55tF: i1USS: goto Rf1uT; GjTtw: $idsiswa = isset($siswas[$i]) ? $siswas[$i] : null; goto sT2Oj; OfbOp: pYTZ7: goto NtqQI; BlBbL: $data["\x69\x6e\163\145\162\164"] = $insert; goto ihIox; WDi52: fy2Ek: goto qe2OF; rxWK7: if (!($id_siswa != null)) { goto A0TDT; } goto nPFqA; oqS5E: Ofh_Y: goto AL537; ZINLZ: A0TDT: goto oqS5E; W9IT2: $data["\163\x69\x73\x77\141"] = $siswa_inserted; goto VspTW; yuMTV: $config = array(array("\146\151\x65\154\x64" => "\156\141\155\141\x5f\x6b\x65\154\141\x73", "\154\x61\x62\145\154" => "\116\141\x6d\x61\40\113\145\x6c\x61\x73", "\x72\165\154\x65\163" => "\x74\162\x69\155"), array("\146\x69\145\x6c\144" => "\153\x6f\144\x65\137\153\145\154\141\x73", "\154\x61\x62\145\154" => "\113\157\x64\145\40\x4b\145\154\141\163", "\x72\165\154\145\x73" => "\164\x72\151\x6d"), array("\x66\151\x65\x6c\x64" => "\x6a\x75\162\165\x73\x61\x6e\137\x69\x64", "\154\141\x62\x65\154" => "\x4a\165\162\x75\163\141\x6e", "\162\x75\154\x65\163" => "\x74\x72\151\x6d"), array("\146\151\x65\154\x64" => "\154\145\166\145\154\x5f\151\x64", "\154\x61\x62\145\x6c" => "\114\145\x76\145\154", "\x72\x75\154\145\163" => "\x74\x72\x69\x6d"), array("\x66\x69\x65\x6c\x64" => "\x67\x75\x72\165\137\x69\x64", "\x6c\141\142\145\154" => "\107\x75\x72\x75", "\x72\x75\x6c\x65\x73" => "\x74\x72\x69\x6d"), array("\x66\151\145\x6c\144" => "\x73\x69\x73\167\x61\137\x69\144", "\154\x61\x62\x65\x6c" => "\x53\x69\x73\167\x61", "\x72\x75\154\145\x73" => "\x74\162\x69\155")); goto k5x1k; dQBvg: $this->db->where("\151\144\x5f\153\145\x6c\141\163", $id); goto W7Rgb; nBUU0: GYNEu: goto dQBvg; bvD7D: c7YxY: goto eB8Qw; I8xDV: NVyWR: goto jNejC; AXKqh: goto fy2Ek; goto xnH2Q; o4PYD: if ($this->form_validation->run() == TRUE) { goto GYNEu; } goto f9Z31; hppvs: goto l28Zf; goto e55tF; Huzrq: $this->output_json($data); goto Jh7Dh; Bp3T_: $insert = []; goto v9_RH; w2hIO: $this->db->where("\x69\144\137\x6a\141\x62\141\x74\141\x6e\137\147\x75\162\165", $guru_id . $id_tp . $id_smt); goto bMMrM; P6ldo: foreach ($siswa_kelas as $id_siswa => $sis) { $insert[$id_tp . $id_smt . $id_siswa] = ["\151\x64\137\x6b\145\x6c\141\163\137\163\151\x73\x77\141" => $id_tp . $id_smt . $id_siswa, "\x69\144\137\164\160" => $id_tp, "\151\x64\137\163\155\164" => $id_smt, "\x69\x64\x5f\x6b\x65\x6c\141\163" => 0, "\x69\x64\137\x73\x69\x73\167\x61" => $id_siswa]; cOr89: } goto wisni; GlYbu: $id_siswa = isset($siswas[$i]) ? $siswas[$i] : null; goto rxWK7; W7Rgb: $status = $this->db->update("\155\x61\x73\164\x65\162\137\x6b\145\154\141\163", $insert); goto kQYWp; NtqQI: $this->form_validation->set_rules($config); goto o4PYD; v9_RH: if (!($id != null && $id != '')) { goto z1OKC; } goto WcLDW; FPukz: if (isset($insert[$id_tp . $id_smt . $idsiswa])) { goto bLf7a; } goto r0Ssd; iweyR: SIvaP: goto LK_Kk; LK_Kk: goto wfONn; goto OfbOp; r0Ssd: $insert[$id_tp . $id_smt . $idsiswa] = ["\151\144\x5f\153\145\154\x61\163\137\x73\151\x73\167\141" => $id_tp . $id_smt . $idsiswa, "\x69\144\x5f\x74\x70" => $id_tp, "\x69\x64\137\x73\x6d\164" => $id_smt, "\x69\x64\137\153\x65\154\x61\x73" => $new_id_kelas, "\151\144\x5f\x73\151\x73\x77\x61" => $idsiswa]; goto rN6rK; Rf1uT: $jumlah = serialize($siswakelas); goto CSReX; Ot1JF: $siswa_inserted = 0; goto OB7E9; CSReX: $insert = array("\x6e\141\155\141\x5f\x6b\145\x6c\x61\163" => strip_tags($this->input->post("\x6e\141\155\141\137\153\x65\154\x61\x73", TRUE)), "\153\x6f\x64\x65\x5f\x6b\145\154\x61\x73" => strip_tags($this->input->post("\x6b\x6f\144\145\137\x6b\x65\154\x61\163", TRUE)), "\152\x75\162\165\163\x61\x6e\x5f\151\144" => strip_tags($this->input->post("\152\165\x72\x75\163\x61\156\137\x69\144", TRUE)), "\x69\x64\137\x74\x70" => $id_tp, "\x69\x64\137\163\x6d\164" => $id_smt, "\154\x65\166\145\154\137\x69\144" => strip_tags($this->input->post("\154\145\166\x65\154\137\x69\x64", TRUE)), "\147\165\162\x75\137\x69\x64" => strip_tags($this->input->post("\147\x75\162\x75\x5f\x69\x64", TRUE)), "\x73\x69\x73\x77\141\137\x69\144" => strip_tags($this->input->post("\x73\x69\163\167\x61\137\151\144", TRUE)), "\x6a\x75\155\x6c\x61\x68\x5f\163\151\x73\167\x61" => $jumlah); goto rxmqe; bMMrM: $updated = $this->db->update("\x6a\141\142\x61\164\141\x6e\137\x67\165\162\165"); goto sB9oW; mDQUb: $guru_id = strip_tags($this->input->post("\x67\165\x72\165\137\151\x64", TRUE)); goto qpc04; BmuV6: U31od: goto oY_xI; mmD3_: KHmSO: goto W9IT2; svJRl: $id = $this->input->post("\x69\x64\x5f\x6b\x65\x6c\x61\x73", true); goto mDQUb; Xt6VV: $i++; goto AXKqh; DoH3H: wfONn: goto IcKBw; f9Z31: $status = FALSE; goto nxSo0; k5x1k: $siswakelas = []; goto k6snd; pEjPE: $id_new = $this->db->insert_id(); goto iweyR; I89Uf: if ($id != null && $id != '') { goto pYTZ7; } goto ZuxvT; ihIox: mMXsg: goto mmD3_; IorKP: $id_smt = $this->master->getSemesterActive()->id_smt; goto fYNNj; rN6rK: goto NVyWR; goto m3NIZ; IcKBw: $updated = false; goto Ot1JF; qpc04: $id_tp = $this->master->getTahunActive()->id_tp; goto IorKP; sB9oW: if (!$updated) { goto mMXsg; } goto Bp3T_; AL537: $i++; goto hppvs; Q_siE: O2Yso: goto BlBbL; k84Xd: zWuqI: goto Xt6VV; DxPg3: goto SIvaP; goto bvD7D; NStGj: $status = FALSE; goto DxPg3; kQYWp: qkI_k: goto DoH3H; wisni: PXOAq: goto BmuV6; eB8Qw: $status = $this->db->insert("\x6d\141\x73\164\x65\x72\137\x6b\x65\154\x61\163", $insert); goto pEjPE; k6snd: $i = 0; goto zOCh8; nKZUT: $data["\163\x74\x61\x74\x75\x73"] = $status; goto Huzrq; nPFqA: array_push($siswakelas, ["\x69\x64" => $id_siswa]); goto ZINLZ; m3NIZ: bLf7a: goto g_v9s; xnH2Q: eGj1g: goto AJFHt; jqxNq: $this->db->set("\151\x64\x5f\x6b\x65\154\141\x73", $id); goto w2hIO; j75l7: if ($this->form_validation->run() == TRUE) { goto c7YxY; } goto NStGj; GyGLY: $i = 0; goto WDi52; OB7E9: if (!$status) { goto KHmSO; } goto jqxNq; nxSo0: goto qkI_k; goto nBUU0; qe2OF: if (!($i <= count($siswas))) { goto eGj1g; } goto GjTtw; JrCsx: if (!(count($siswa_kelas) > 0)) { goto U31od; } goto P6ldo; fYNNj: $siswas = $this->input->post("\163\x69\163\x77\141", true); goto yuMTV; ZuxvT: $this->form_validation->set_rules($config); goto j75l7; VspTW: $data["\x75\160\x64\x61\164\x65"] = $updated; goto nKZUT; jNejC: UY85d: goto k84Xd; AJFHt: foreach ($insert as $ins) { goto EYBJJ; vRE7f: $siswa_inserted++; goto REzyT; EYBJJ: if (!$this->db->replace("\x6b\x65\154\141\x73\137\x73\x69\x73\x77\141", $ins)) { goto rAN3q; } goto vRE7f; WyQHs: BGR4j: goto LvwzN; REzyT: rAN3q: goto WyQHs; LvwzN: } goto Q_siE; oY_xI: z1OKC: goto GyGLY; WcLDW: $siswa_kelas = $this->kelas->get_status_siswa_kelas($id, $id_tp, $id_smt); goto JrCsx; Jh7Dh: } public function update_kelas($id) { goto oT4B5; eCwGn: $id_smt = $this->master->getSemesterActive()->id_smt; goto PGtih; oT4B5: $id_tp = $this->master->getTahunActive()->id_tp; goto eCwGn; AwRQu: enst7: goto ZVoPw; bb5e9: WoHdL: goto ww3yN; ZVoPw: return $siswakelas; goto gAsZp; jul64: $this->db->replace("\153\145\x6c\x61\x73\x5f\163\x69\163\x77\x61", $insert); goto k0p2R; bJldk: U0Z7z: goto H6_nX; PrVLV: $i = 0; goto F_MB9; PGtih: $siswakelas = $this->kelas->get_status_siswa_kelas($id, $id_tp, $id_smt); goto T3lM5; NUBsw: goto gNgmg; goto AwRQu; ww3yN: $i++; goto NUBsw; k0p2R: wPSkj: goto bb5e9; EgKrb: if (!($i <= $rowsSelect)) { goto enst7; } goto pol1X; M0ETE: $insert = ["\x69\x64\x5f\x6b\145\x6c\141\163\137\163\x69\163\x77\x61" => $id_tp . $id_smt . $id_siswa, "\x69\144\137\164\160" => $id_tp, "\x69\x64\137\163\x6d\x74" => $id_smt, "\151\144\137\153\x65\x6c\141\x73" => $id, "\151\x64\137\x73\151\x73\167\x61" => $id_siswa]; goto jul64; hTRdu: vEsxH: goto bJldk; pol1X: $id_siswa = $this->input->post("\x73\151\x73\x77\141\133" . $i . "\x5d", true); goto BR5vc; T3lM5: if (!(count($siswakelas) > 0)) { goto U0Z7z; } goto e6NWm; e6NWm: foreach ($siswakelas as $id_siswa => $sis) { goto v0LQD; Zcq90: $this->db->replace("\x6b\x65\154\141\x73\x5f\163\151\163\x77\x61", $insert); goto RTEQx; RTEQx: D7Ok8: goto Ycsd2; v0LQD: $insert = ["\151\x64\x5f\x6b\x65\154\141\x73\x5f\163\151\x73\x77\x61" => $id_tp . $id_smt . $id_siswa, "\151\x64\x5f\x74\x70" => $id_tp, "\151\x64\137\x73\155\164" => $id_smt, "\x69\144\x5f\153\145\154\x61\x73" => 0, "\x69\144\137\x73\151\163\x77\141" => $id_siswa]; goto Zcq90; Ycsd2: } goto hTRdu; F_MB9: gNgmg: goto EgKrb; BR5vc: if (!($id_siswa != null)) { goto wPSkj; } goto M0ETE; H6_nX: $rowsSelect = count($this->input->post("\x73\151\x73\167\x61", true)); goto PrVLV; gAsZp: } public function manage() { goto FAR6u; g8A9p: $data["\153\x65\154\141\x73\62"] = $this->dropdown->getAllKelas($tp->id_tp, "\x32"); goto C0TrB; NsoS7: $data["\x74\x70"] = $this->dashboard->getTahun(); goto DnPeI; udLRz: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto XgIzC; LT08k: $data["\x70\162\157\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto juDYd; XgIzC: $data["\x73\155\164\x5f\141\143\164\x69\x76\x65"] = $smt; goto LT08k; juDYd: $data["\x6b\145\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, "\x31"); goto g8A9p; DnPeI: $data["\x74\160\137\141\143\x74\x69\166\x65"] = $tp; goto udLRz; Q6iZ9: $tp = $this->dashboard->getTahunActive(); goto iGHRL; jPp1h: $this->load->view("\155\141\x73\164\145\162\57\153\145\x6c\x61\x73\x2f\160\145\162\x73\145\x6d\145\x73\164\145\x72"); goto orw3m; iGHRL: $smt = $this->dashboard->getSemesterActive(); goto NsoS7; AFuHy: $data = ["\165\x73\x65\162" => $user, "\152\165\x64\165\154" => "\103\157\x70\x79\x20\113\x65\x6c\x61\163", "\x73\x75\x62\x6a\x75\144\x75\154" => "\x43\x6f\160\x79\40\104\141\x74\141\40\x4b\x65\x6c\141\163\40\153\x65\40\x53\115\124\x20\x49\111", "\x73\x65\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto Q6iZ9; FAR6u: $user = $this->ion_auth->user()->row(); goto AFuHy; orw3m: $this->load->view("\x5f\x74\x65\x6d\160\x6c\141\x74\x65\x73\x2f\144\141\163\150\x62\x6f\x61\162\144\57\137\146\x6f\157\164\145\x72"); goto lzUdE; C0TrB: $this->load->view("\137\x74\x65\x6d\160\154\141\164\x65\x73\x2f\144\141\163\150\x62\x6f\141\162\x64\57\137\150\145\141\144\x65\162", $data); goto jPp1h; lzUdE: } public function getFromSmt1($kelas) { goto WhVhn; rFyYz: G_58u: goto v4Oe9; w1sDL: $ids = []; goto u4Inv; FPXou: $data2 = $this->kelas->getKelasSiswa($kelas, $tp->id_tp, "\x32"); goto w1sDL; RFbWX: $data1 = $this->kelas->getKelasSiswa($kelas, $tp->id_tp, "\x31"); goto FPXou; WhVhn: $tp = $this->dashboard->getTahunActive(); goto RFbWX; Y2ake: $this->output_json(["\x73\155\164\x31" => $data1, "\x73\x6d\x74\x32" => $ids]); goto Z3__X; v4Oe9: mVP_G: goto Y2ake; Yl9KC: foreach ($data2 as $s) { $ids[] = $s->id_siswa; zx2wh: } goto rFyYz; u4Inv: if (!(count($data2) > 0)) { goto mVP_G; } goto Yl9KC; Z3__X: } public function copyFromSmt1() { goto W5zhi; jHvFD: o_5ng: goto uckQf; CugNd: foreach ($arrSiswa as $value) { goto v0CvO; f2tbo: RoWHT: goto icaAS; T9MxK: if (!($id_siswa != null)) { goto RoWHT; } goto bcg5o; bcg5o: $insert = ["\x69\144\137\x6b\x65\154\141\x73\x5f\x73\151\x73\167\141" => $tp->id_tp . $smt->id_smt . $id_siswa, "\151\x64\137\x74\160" => $tp->id_tp, "\x69\x64\x5f\x73\x6d\x74" => $smt->id_smt, "\151\x64\x5f\153\x65\154\141\163" => $idk, "\151\144\x5f\163\151\x73\x77\x61" => $id_siswa]; goto P2V1q; icaAS: h_L77: goto k0hAV; v0CvO: $id_siswa = $value["\x69\144"]; goto T9MxK; P2V1q: $res[] = $this->db->replace("\153\x65\154\141\x73\137\163\151\x73\167\x61", $insert); goto f2tbo; k0hAV: } goto jHvFD; cj2cR: $arrSiswa = unserialize($kelas->jumlah_siswa); goto CugNd; TtKmH: $data = array("\x6e\141\x6d\141\137\x6b\x65\x6c\x61\x73" => $kelas2, "\153\x6f\x64\145\137\153\145\x6c\x61\x73" => $kelas->kode_kelas, "\x6a\165\x72\165\163\141\156\x5f\x69\x64" => $kelas->jurusan_id, "\151\144\x5f\x74\160" => $tp->id_tp, "\x69\144\137\x73\x6d\x74" => $smt->id_smt, "\x6c\x65\x76\145\x6c\137\151\144" => $kelas->level_id, "\x67\165\x72\x75\x5f\x69\x64" => $kelas->guru_id, "\163\151\x73\167\141\x5f\151\144" => $kelas->siswa_id, "\152\165\155\x6c\x61\150\137\x73\x69\163\167\141" => $kelas->jumlah_siswa); goto hZtE_; HiOn9: $res = []; goto cj2cR; vzN47: $kelas = $this->kelas->get_one($kelas1, $tp->id_tp, "\61"); goto TtKmH; LBnum: $kelas2 = $this->input->post("\x6b\x65\154\x61\163\x5f\x62\141\162\x75", true); goto vzN47; W5zhi: $tp = $this->dashboard->getTahunActive(); goto BC8Q2; BC8Q2: $smt = $this->dashboard->getSemesterActive(); goto fGjO3; fGjO3: $kelas1 = $this->input->post("\x6b\145\x6c\x61\x73\137\x6c\x61\x6d\141", true); goto LBnum; bhpnM: $idk = $this->db->insert_id(); goto HiOn9; uckQf: $this->output_json($res); goto O3D9F; hZtE_: $this->db->insert("\155\141\x73\x74\145\162\x5f\153\145\x6c\141\163", $data); goto bhpnM; O3D9F: } public function copySiswaFromSmt1() { goto IIue0; yo0JH: IhCqk: goto aWyEG; LjqVp: $siswakelas = []; goto B74rS; hE7Ph: $smt = $this->dashboard->getSemesterActive(); goto ItZb5; B74rS: foreach ($posts as $d) { goto Jz3MD; sk46m: ZvSRL: goto dVLCb; Jz3MD: $idkelases[] = $d->id_kelas; goto UZMFp; UZMFp: $siswakelas[$d->id_kelas][] = ["\151\x64" => $d->id_siswa]; goto sk46m; dVLCb: } goto yo0JH; ZFNCC: $res = []; goto NNxUw; mpNA1: qZzmr: goto pmHlq; IIue0: $tp = $this->dashboard->getTahunActive(); goto hE7Ph; aWyEG: $idkelases = array_unique($idkelases); goto ZFNCC; Zf05W: $idkelases = []; goto LjqVp; ItZb5: $posts = json_decode($this->input->post("\153\145\x6c\x61\x73", true)); goto Zf05W; pmHlq: $this->output_json($res); goto anINH; NNxUw: foreach ($idkelases as $ik) { goto YSr6r; jn_1J: dC97c: goto PfhoT; VSGDU: $jumlah = serialize($siswakelas[$ik]); goto ys1Ih; GJ_AT: J7gPJ: goto jn_1J; GQ1TJ: $this->db->insert("\x6d\141\x73\x74\145\x72\x5f\x6b\145\x6c\x61\x73", $data); goto B6_Rh; B6_Rh: $idk = $this->db->insert_id(); goto asCHR; ys1Ih: $data = array("\156\x61\155\141\x5f\153\x65\154\x61\163" => $kelas->nama_kelas, "\153\x6f\144\x65\137\x6b\145\154\x61\x73" => $kelas->kode_kelas, "\152\x75\x72\165\x73\x61\156\x5f\x69\144" => $kelas->jurusan_id, "\x69\x64\x5f\x74\x70" => $tp->id_tp, "\x69\x64\x5f\x73\x6d\x74" => $smt->id_smt, "\x6c\x65\166\145\154\x5f\151\x64" => $kelas->level_id, "\x67\x75\162\165\137\151\x64" => $kelas->guru_id, "\x73\x69\163\167\x61\x5f\151\x64" => $kelas->siswa_id, "\x6a\165\155\x6c\141\150\137\163\151\163\167\x61" => $jumlah); goto GQ1TJ; YSr6r: if (!($ik != '')) { goto dC97c; } goto k1_7i; PfhoT: A2fUj: goto haBK0; asCHR: foreach ($siswakelas[$ik] as $s) { goto yp5lM; hJuM1: Hu8WM: goto d7ug2; afv77: $res[] = $this->db->replace("\153\145\154\141\163\x5f\x73\151\163\167\x61", $insert); goto hJuM1; yp5lM: $insert = ["\x69\x64\137\153\x65\x6c\141\x73\137\163\x69\163\167\x61" => $tp->id_tp . $smt->id_smt . $s["\151\x64"], "\x69\144\x5f\x74\x70" => $tp->id_tp, "\x69\x64\137\163\x6d\164" => $smt->id_smt, "\x69\144\x5f\153\x65\154\x61\x73" => $idk, "\151\144\137\x73\x69\x73\x77\141" => $s["\x69\144"]]; goto afv77; d7ug2: } goto GJ_AT; k1_7i: $kelas = $this->kelas->get_one($ik, $tp->id_tp, "\x31"); goto VSGDU; haBK0: } goto mpNA1; anINH: } public function kenaikan() { goto QklER; QklER: $kelas = $this->input->get("\x6b\145\x6c\141\163", true); goto Xxudt; kqV3I: $lvlKls = $this->kelas->get_one($kelas, $tp->id_tp - 1, "\x32"); goto R83hW; T76RL: $this->load->view("\x5f\x74\145\155\x70\154\141\x74\x65\x73\x2f\144\141\x73\x68\142\x6f\141\x72\144\57\x5f\x66\157\157\x74\x65\x72"); goto Wd6Vw; VPA5X: $data = ["\165\x73\x65\162" => $user, "\x6a\x75\x64\165\154" => "\x4b\x65\156\141\x69\153\x6b\141\156\x20\113\145\x6c\x61\163", "\163\x75\x62\x6a\165\144\165\x6c" => "\116\x61\x69\x6b\x20\x4b\x65\x6c\x61\x73\x20\123\151\x73\167\x61", "\x73\x65\164\x74\x69\x6e\147" => $setting]; goto K1mAH; ORlai: $smt = $this->dashboard->getSemesterActive(); goto z_J5l; Do2I1: $data["\163\151\x73\167\x61\x5f\153\145\x6c\x61\x73\137\142\141\162\165"] = $this->master->getSiswaKelasBaru($tp->id_tp, $smt->id_smt); goto tsy6n; ruXzf: $this->load->view("\155\x61\x73\x74\145\x72\57\x6b\x65\x6c\141\163\x2f\156\141\151\153\x6b\x65\x6c\141\x73"); goto T76RL; ndsA2: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto SNTLB; R83hW: $data["\x6b\145\154\141\x73\x65\163"] = $this->dropdown->getAllKelas($tp->id_tp - 1, "\62", "\x3d" . ($lvlKls->level_id + 1)); goto uPv3i; Xxudt: $user = $this->ion_auth->user()->row(); goto hnVgK; lMrTw: $data["\x6b\145\154\x61\163\137\142\141\162\x75"] = $this->dropdown->getAllKelas($tp->id_tp, "\x31"); goto eTjkb; hnVgK: $setting = $this->dashboard->getSetting(); goto VPA5X; K1mAH: $tp = $this->dashboard->getTahunActive(); goto ORlai; eTjkb: if (!($kelas != null)) { goto OpgNS; } goto Do2I1; QTOWY: $data["\x74\x70\137\x61\143\164\x69\166\x65"] = $tp; goto ndsA2; y6DMy: $level = $setting->jenjang == "\x31" ? "\66" : ($setting->jenjang == "\62" ? "\x39" : ($setting->jenjang == "\61" ? "\x33" : "\x31\62")); goto oqAmv; oqAmv: $data["\153\x65\154\x61\x73\137\154\x61\155\x61"] = $this->dropdown->getAllKelas($tp->id_tp - 1, "\x32", "\x21\75" . $level); goto lMrTw; uPv3i: OpgNS: goto UdSGO; z_J5l: $data["\x74\160"] = $this->dashboard->getTahun(); goto QTOWY; SNTLB: $data["\163\155\x74\x5f\x61\143\164\x69\166\145"] = $smt; goto rEL6n; UdSGO: $this->load->view("\x5f\164\145\x6d\x70\154\141\164\145\x73\57\x64\x61\x73\150\142\x6f\141\162\144\57\x5f\150\x65\x61\x64\145\162", $data); goto ruXzf; y0DVY: $data["\153\145\x6c\x61\x73\x5f\x73\x65\x6c\x65\143\x74\145\144"] = $kelas; goto kqV3I; rEL6n: $data["\160\162\157\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto y6DMy; tsy6n: $data["\163\x69\x73\167\x61\x73"] = $this->rapor->getKenaikanSiswa($kelas, $tp->id_tp - 1, "\x32"); goto y0DVY; Wd6Vw: } public function naikKelas() { goto BS15u; hMR92: foreach ($idkelases as $ik) { goto cZlQz; o8qqN: $data = array("\156\x61\x6d\x61\137\x6b\145\x6c\141\x73" => $kelas->nama_kelas, "\153\x6f\x64\145\x5f\153\145\154\141\x73" => $kelas->kode_kelas, "\x6a\165\x72\x75\163\x61\x6e\137\x69\144" => $kelas->jurusan_id, "\151\144\x5f\164\160" => $tp->id_tp, "\151\144\137\163\x6d\164" => $smt->id_smt, "\154\145\166\x65\154\137\x69\144" => $kelas->level_id, "\147\165\162\165\137\151\144" => $kelas->guru_id, "\163\151\163\x77\141\x5f\x69\144" => $kelas->siswa_id, "\152\165\155\x6c\x61\150\137\x73\151\163\167\x61" => $jumlah); goto c5jid; cZlQz: $kelas = $this->kelas->get_one($ik, $tp->id_tp - 1, "\62"); goto w6odo; eMiio: DhuYY: goto vmfwx; ODeDP: $jumlah = serialize($siswakelas[$ik]); goto o8qqN; c5jid: $this->db->insert("\x6d\141\163\164\145\x72\x5f\x6b\x65\154\141\x73", $data); goto jSJUn; Bamf1: goto DhuYY; goto Y6swZ; zFGhL: $this->db->where("\x69\144\137\153\145\154\141\x73", $kelas_baru->id_kelas); goto ZB1Cr; Twul8: A8ZmF: goto wmffJ; tUA_6: foreach ($siswakelas[$ik] as $s) { goto fnCes; euy2q: QIMBH: goto b1FaO; B7huy: qz0zJ: goto euy2q; fnCes: foreach ($jmlLama as $lama) { goto uw89G; sm764: array_push($jmlLama, ["\151\x64" => $s["\151\144"]]); goto fpHsI; uw89G: if (!($lama["\151\144"] != $s["\151\144"])) { goto w4sAm; } goto sm764; nVuY_: w4sAm: goto MKR50; MKR50: hMJlF: goto KilEs; fpHsI: array_push($idks, $kelas_baru->id_kelas); goto nVuY_; KilEs: } goto B7huy; b1FaO: } goto WPVOy; jSJUn: array_push($idks, $this->db->insert_id()); goto eMiio; Y6swZ: oposE: goto ODeDP; WPVOy: epqBc: goto wKz42; vmfwx: foreach ($idks as $idk) { goto EUIAB; EUIAB: foreach ($siswakelas[$ik] as $s) { goto R0_94; lBD9j: SwNiB: goto yZFDa; HBJxQ: $res[] = $this->db->replace("\x6b\x65\154\x61\x73\137\163\151\163\167\141", $insert); goto lBD9j; R0_94: $insert = ["\151\144\137\153\x65\154\141\x73\x5f\163\x69\163\x77\x61" => $tp->id_tp . $smt->id_smt . $s["\151\144"], "\151\x64\137\x74\160" => $tp->id_tp, "\151\x64\x5f\163\x6d\164" => $smt->id_smt, "\x69\144\137\153\145\154\141\163" => $idk, "\151\144\137\163\151\x73\x77\x61" => $s["\151\x64"]]; goto HBJxQ; yZFDa: } goto mKSIi; jjGHP: j_wME: goto MNodo; mKSIi: Xd50i: goto jjGHP; MNodo: } goto Twul8; p7Y20: array_push($idks, $kelas_baru->id_kelas); goto DYYIR; Ftjo3: i2gF0: goto YMiUv; wmffJ: yODm6: goto r0aLI; YMiUv: $jmlLama = unserialize($kelas_baru->jumlah_siswa); goto tUA_6; w6odo: $kelas_baru = $this->kelas->getKelasByNama($kelas->nama_kelas, $tp->id_tp, $smt->id_smt); goto RIlXH; RIlXH: if ($kelas_baru == null) { goto oposE; } goto t2nFI; gfEdj: $data = array("\x6e\x61\x6d\x61\137\153\145\x6c\141\163" => $kelas->nama_kelas, "\153\x6f\144\145\137\153\145\154\x61\163" => $kelas->kode_kelas, "\x6a\165\162\165\x73\x61\x6e\137\x69\144" => $kelas->jurusan_id, "\x69\x64\x5f\164\160" => $tp->id_tp, "\x69\x64\x5f\163\x6d\164" => $smt->id_smt, "\154\x65\x76\145\154\137\151\x64" => $kelas->level_id, "\x67\x75\x72\x75\x5f\x69\x64" => $kelas->guru_id, "\163\x69\163\167\x61\x5f\x69\144" => $kelas->siswa_id, "\152\165\155\154\x61\150\137\x73\x69\x73\167\x61" => $jumlah); goto zFGhL; ZB1Cr: $this->db->update("\x6d\x61\163\164\x65\x72\x5f\x6b\145\154\x61\x73", $data); goto Bamf1; BEKv7: nZ_Qy: goto gfEdj; WBw2e: $jumlah = serialize($siswakelas[$ik]); goto p7Y20; DYYIR: goto nZ_Qy; goto Ftjo3; t2nFI: if ($mode == "\160\x65\x72\x73\151\163\167\x61") { goto i2gF0; } goto WBw2e; wKz42: $jumlah = serialize($jmlLama); goto BEKv7; r0aLI: } goto qoqBh; kA1QF: $idkelases = array_unique($idkelases); goto vqFyd; oBBir: $this->output_json($data); goto Nh1ns; wW4QM: $smt = $this->dashboard->getSemesterActive(); goto Ce15I; qoqBh: B_3cG: goto ypJCL; RmFfv: $siswakelas = []; goto NKQ8F; Ce15I: $posts = json_decode($this->input->post("\x6b\145\x6c\141\x73", true)); goto Jk87H; Nq4WQ: $idkelases = []; goto RmFfv; IDRjS: S56yg: goto kA1QF; vqFyd: $res = []; goto XSW1w; NKQ8F: foreach ($posts as $d) { goto CA59B; yAieH: tzhT1: goto QZdq0; CA59B: $idkelases[] = $d->kelas_baru; goto ZMqsA; ZMqsA: $siswakelas[$d->kelas_baru][] = ["\x69\x64" => $d->id_siswa]; goto yAieH; QZdq0: } goto IDRjS; ypJCL: $data["\x72\x65\163"] = $siswakelas; goto oBBir; BS15u: $tp = $this->dashboard->getTahunActive(); goto wW4QM; Jk87H: $mode = $this->input->post("\x6d\x6f\x64\x65", true); goto Nq4WQ; XSW1w: $idks = []; goto hMR92; Nh1ns: } public function hapus($id_kelas) { goto lWUNq; OIjZ1: $delete["\153\145\x6c\141\163"] = $this->master->delete("\x6d\141\x73\x74\x65\162\137\153\x65\154\141\x73", $id_kelas, "\151\144\137\x6b\145\x6c\141\163"); goto cPBvS; lWUNq: $delete["\163\151\163\167\141"] = $this->master->delete("\x6b\x65\x6c\141\163\137\163\151\x73\167\x61", $id_kelas, "\x69\144\137\153\x65\x6c\x61\x73"); goto OIjZ1; cPBvS: $this->output_json($delete); goto cEdna; cEdna: } }
