<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtsesisiswa extends CI_Controller { public function __construct() { goto Qahxq; CG_jR: $this->load->library(["\x64\141\164\x61\x74\x61\x62\154\x65\163", "\x66\157\x72\x6d\137\x76\141\154\151\x64\141\164\151\x6f\156"]); goto agd1n; YWfHy: goto rFwAl; goto wTDVH; IFCgF: $this->load->model("\104\162\x6f\160\x64\x6f\167\x6e\137\155\157\144\145\x6c", "\x64\162\x6f\x70\x64\157\x77\x6e"); goto dPUqc; RRTWZ: $this->form_validation->set_error_delimiters('', ''); goto H19pM; ipoaL: unyxW: goto YWfHy; MhCR8: if ($this->ion_auth->is_admin()) { goto unyxW; } goto uxAoq; I1oLw: if (!$this->ion_auth->logged_in()) { goto LcND3; } goto MhCR8; gqpoF: redirect("\141\165\x74\x68"); goto dF3SI; dPUqc: $this->load->model("\113\145\154\x61\163\137\x6d\x6f\144\145\x6c", "\153\x65\154\x61\x73"); goto RRTWZ; uxAoq: show_error("\x48\x61\156\171\x61\40\x41\x64\x6d\151\x6e\151\163\x74\x72\141\x74\x6f\162\40\x79\141\156\x67\40\144\151\x62\145\162\x69\40\150\141\x6b\40\x75\156\164\165\153\40\155\x65\x6e\x67\x61\153\x73\x65\163\40\x68\141\x6c\141\x6d\141\156\x20\151\x6e\151\54\40\74\x61\40\x68\162\x65\146\x3d\x22" . base_url("\x64\x61\163\150\142\x6f\141\x72\x64") . "\x22\x3e\113\x65\x6d\142\x61\154\151\40\153\x65\40\155\x65\x6e\x75\x20\x61\x77\141\154\x3c\57\141\76", 403, "\x41\153\x73\x65\163\40\x54\145\162\x6c\x61\x72\x61\x6e\147"); goto ipoaL; Qahxq: parent::__construct(); goto I1oLw; wTDVH: LcND3: goto gqpoF; HBvWr: $this->load->model("\103\142\x74\137\x6d\x6f\144\x65\x6c", "\143\142\x74"); goto IFCgF; L2cBF: $this->load->model("\104\141\163\x68\142\x6f\x61\162\144\137\x6d\x6f\x64\x65\x6c", "\144\141\x73\x68\142\157\x61\x72\144"); goto HBvWr; dF3SI: rFwAl: goto CG_jR; agd1n: $this->load->model("\x4d\x61\163\x74\145\162\137\x6d\157\x64\x65\154", "\155\x61\x73\x74\x65\162"); goto L2cBF; H19pM: } public function output_json($data, $encode = true) { goto pKURV; i1ddP: $this->output->set_content_type("\141\x70\160\x6c\x69\143\141\164\x69\157\x6e\x2f\152\163\x6f\x6e")->set_output($data); goto HKPs7; wKdDD: $data = json_encode($data); goto Yo3kS; Yo3kS: vX6_S: goto i1ddP; pKURV: if (!$encode) { goto vX6_S; } goto wKdDD; HKPs7: } public function index() { goto ZOg37; dpikZ: $this->load->view("\143\x62\x74\x2f\x73\145\163\151\163\x69\163\x77\141\57\x64\x61\x74\x61"); goto Fm3G9; WkVkl: No11h: goto WjAcc; djUbs: $siswas = $this->cbt->getRuangSesiSiswa($kls, $tp->id_tp, $smt->id_smt); goto WkVkl; SjFlW: $user = $this->ion_auth->user()->row(); goto NPLGB; hIMaF: $kelas_selected = $kls != null ? $kls : "\x30"; goto aMdki; Fm3G9: $this->load->view("\x5f\x74\x65\155\x70\x6c\x61\164\x65\163\57\x64\x61\163\150\142\x6f\x61\x72\144\57\137\x66\x6f\157\x74\x65\x72"); goto JBosi; ZOg37: $tp = $this->dashboard->getTahunActive(); goto SXPf7; NPLGB: $data = ["\x75\x73\x65\x72" => $user, "\x6a\x75\144\x75\x6c" => "\101\164\165\162\40\x52\165\141\156\147\x20\144\141\x6e\40\x53\145\x73\151\40\x53\151\x73\167\x61", "\x73\x75\142\x6a\x75\144\165\x6c" => "\x52\165\x61\156\x67\40\144\141\x6e\x20\123\145\x73\151\40\x53\x69\163\167\141", "\163\x65\164\164\151\x6e\147" => $this->dashboard->getSetting(), "\153\x65\x6c\141\163" => $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt), "\162\x75\x61\156\147\137\x6b\x65\x6c\141\x73" => $this->cbt->getKelasList($tp->id_tp, $smt->id_smt), "\163\145\163\151" => $this->dropdown->getAllSesi(), "\x72\165\x61\156\x67" => $this->cbt->getAllRuang(), "\x74\x70" => $this->dashboard->getTahun(), "\164\160\137\x61\x63\x74\151\x76\x65" => $tp, "\x73\155\x74" => $this->dashboard->getSemester(), "\163\x6d\164\x5f\x61\143\x74\151\x76\x65" => $smt, "\x70\162\157\x66\151\154\x65" => $this->dashboard->getProfileAdmin($user->id)]; goto mFd7x; SXPf7: $smt = $this->dashboard->getSemesterActive(); goto SjFlW; exuNu: $this->load->view("\x5f\164\145\155\x70\154\x61\164\145\x73\57\144\x61\163\x68\x62\157\x61\162\x64\x2f\x5f\x68\145\141\x64\x65\x72", $data); goto dpikZ; mFd7x: $kls = $this->input->get("\153\154\163", true); goto hIMaF; wNF0e: if (!($kelas_selected != "\60")) { goto No11h; } goto djUbs; C8MFG: $data["\153\145\x6c\x61\163\x5f\x73\145\x6c\x65\x63\x74\145\x64"] = $kelas_selected; goto exuNu; WjAcc: $data["\x73\x69\x73\x77\x61\163"] = $siswas; goto C8MFG; aMdki: $siswas = []; goto wNF0e; JBosi: } public function getAllRuang() { $this->output_json($this->cbt->getAllRuang()); } public function getAllSesi() { $this->output_json($this->dropdown->getAllSesi()); } public function add() { goto T6AL6; f0FmK: $data["\163\x74\x61\164\x75\x73"] = $insert; goto nd7SJ; rRKWc: $this->master->create("\143\x62\164\137\163\145\163\x69", $insert, false); goto f0FmK; T6AL6: $insert = ["\156\x61\155\141\x5f\163\x65\163\151" => $this->input->post("\x6e\141\155\x61\x5f\163\x65\163\x69", true), "\x6b\x6f\144\x65\137\x73\145\163\x69" => $this->input->post("\x6b\157\x64\x65\137\163\x65\163\x69", true), "\167\141\153\x74\165\137\155\165\x6c\x61\x69" => $this->input->post("\x77\x61\x6b\164\x75\137\x6d\x75\154\141\x69", true), "\167\x61\153\164\x75\137\x61\x6b\x68\151\162" => $this->input->post("\x77\141\x6b\164\x75\x5f\x61\x6b\x68\x69\162", true)]; goto rRKWc; nd7SJ: $this->output_json($data); goto FiFUY; FiFUY: } public function update() { $data = $this->cbt->updateSesi(); $this->output->set_content_type("\x61\160\160\154\151\x63\141\164\x69\x6f\x6e\x2f\152\163\157\x6e")->set_output($data); } public function delete() { goto uuPWz; cr5L1: if (!$this->master->delete("\143\x62\164\137\163\x65\x73\151", $chk, "\x69\x64\137\163\145\x73\x69")) { goto gwvza; } goto mSUSG; KvXkh: if (!$chk) { goto rAFG7; } goto cr5L1; mSUSG: $this->output_json(["\x73\164\x61\x74\x75\x73" => true, "\164\157\x74\x61\x6c" => count($chk)]); goto if4eG; if4eG: gwvza: goto JOHLa; uuPWz: $chk = $this->input->post("\x63\x68\x65\143\x6b\145\x64", true); goto KvXkh; JOHLa: goto emBy_; goto I1yAr; NBFgP: emBy_: goto lC43P; I1yAr: rAFG7: goto uGR5l; uGR5l: $this->output_json(["\163\x74\141\164\165\x73" => false]); goto NBFgP; lC43P: } public function editsesisiswa() { goto MWfGI; wxQS8: $smt = $this->dashboard->getSemesterActive(); goto XsJhP; WMY6P: DQJ7W: goto J3daU; AaIVN: foreach ($rs as $id => $klss) { goto tRz4j; tRz4j: foreach ($klss as $idkls => $kls) { goto lx_f5; lx_f5: $data = ["\x73\x69\x73\167\141\137\151\144" => $id, "\153\x65\x6c\x61\x73\x5f\x69\x64" => $idkls, "\x72\165\x61\156\147\137\x69\x64" => $kls["\162\165\x61\156\147"], "\163\145\163\x69\137\x69\x64" => $kls["\163\145\163\x69"], "\x74\x70\x5f\x69\144" => $tp->id_tp, "\x73\x6d\164\137\x69\x64" => $smt->id_smt]; goto eNPV6; eNPV6: $update = $this->db->replace("\x63\142\x74\137\163\x65\163\x69\137\163\151\x73\167\141", $data); goto lYUow; lYUow: KSWL_: goto r60Ko; r60Ko: } goto yf1mb; yf1mb: tyyUh: goto Gy3hg; Gy3hg: IAVGt: goto NT6bk; NT6bk: } goto WMY6P; MWfGI: $rs = $this->input->post("\162\x75\x61\156\x67\55\x73\145\163\151", true); goto NInqN; XsJhP: $update = false; goto AaIVN; NInqN: $tp = $this->dashboard->getTahunActive(); goto wxQS8; J3daU: $data["\163\164\x61\164\165\163"] = $update; goto pKy24; pKy24: $this->output_json($data); goto YhCb2; YhCb2: } public function editsesikelas() { goto VwwWN; G9YKg: $this->output_json($data); goto qij_C; jK5eg: foreach ($input as $d) { goto IqQKm; VCzOT: $data = ["\x69\144\x5f\153\145\x6c\141\163\x5f\x72\x75\x61\x6e\147" => $d->kelas_id . $tp->id_tp . $smt->id_smt, "\x69\x64\x5f\x6b\x65\154\141\163" => $d->kelas_id, "\151\x64\137\x72\165\x61\156\147" => $d->ruang_id, "\x69\x64\x5f\x73\145\163\x69" => $d->sesi_id, "\x69\x64\137\x74\x70" => $tp->id_tp, "\151\144\137\x73\155\x74" => $smt->id_smt, "\163\145\x74\137\163\151\x73\167\141" => $d->set_siswa]; goto tF8I_; jWTAJ: GyCAW: goto mL3fN; Xtd4b: foreach ($siswas as $siswa) { goto HiLR6; ZhR5h: PVJSr: goto DYWOy; nrUBP: $this->db->replace("\x63\142\164\137\163\x65\163\x69\137\x73\151\x73\167\x61", $data); goto ZhR5h; HiLR6: $data = ["\x73\x69\163\x77\141\137\x69\144" => $siswa->id_siswa, "\x6b\x65\154\141\163\x5f\x69\144" => $siswa->id_kelas, "\x72\x75\x61\x6e\x67\137\x69\144" => $d->ruang_id, "\163\145\x73\151\x5f\151\x64" => $d->sesi_id, "\164\x70\x5f\151\x64" => $tp->id_tp, "\163\155\x74\137\151\144" => $smt->id_smt]; goto nrUBP; DYWOy: } goto b6IyZ; b6IyZ: Gg1zi: goto VCzOT; IqQKm: $siswas = $this->kelas->getKelasSiswa($d->kelas_id, $tp->id_tp, $smt->id_smt); goto Xtd4b; tF8I_: $update = $this->db->replace("\x63\142\x74\x5f\153\x65\154\141\163\137\162\165\141\x6e\x67", $data); goto jWTAJ; mL3fN: } goto ok3FV; zUtYB: $data["\163\164\x61\164\x75\163"] = $update; goto G9YKg; li4Ii: $smt = $this->dashboard->getSemesterActive(); goto jK5eg; ok3FV: MFaRy: goto zUtYB; inb9p: $tp = $this->dashboard->getTahunActive(); goto li4Ii; VwwWN: $input = json_decode($this->input->post("\153\145\154\141\x73\x5f\163\x65\x73\x69", true)); goto inb9p; qij_C: } }