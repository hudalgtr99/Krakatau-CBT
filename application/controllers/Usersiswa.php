<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\x45\120\101\x54\110") or exit("\116\x6f\x20\144\x69\x72\x65\x63\x74\x20\163\x63\162\x69\x70\x74\x20\x61\143\143\145\x73\163\x20\x61\154\154\157\x77\145\144"); class Usersiswa extends CI_Controller { public function __construct() { goto XsKb3; J72p3: LpLBl: goto klZM6; nS2p7: redirect("\x61\165\x74\x68"); goto J72p3; FccQN: if ($this->ion_auth->logged_in()) { goto LpLBl; } goto nS2p7; GAem8: $this->load->model("\125\163\x65\162\163\137\155\x6f\x64\145\154", "\x75\x73\x65\x72\163"); goto xB4TR; mqEwQ: $this->load->model("\104\x61\163\150\x62\157\x61\x72\x64\137\x6d\157\x64\145\x6c", "\x64\141\163\150\142\x6f\x61\x72\x64"); goto DQGTh; DQGTh: $this->form_validation->set_error_delimiters('', ''); goto DnnlP; xB4TR: $this->load->model("\x4d\x61\163\164\145\x72\137\155\x6f\x64\x65\x6c", "\155\141\x73\x74\145\162"); goto mqEwQ; XsKb3: parent::__construct(); goto FccQN; klZM6: $this->load->library(["\144\x61\x74\x61\164\x61\x62\x6c\145\163", "\146\x6f\162\x6d\137\x76\x61\154\x69\144\x61\164\x69\x6f\x6e"]); goto GAem8; DnnlP: } public function is_has_access() { goto ly1Au; ly1Au: $user_id = $this->ion_auth->user()->row()->id; goto TAKYJ; TAKYJ: $group = $this->ion_auth->get_users_groups($user_id)->row()->name; goto jLGTh; TdEKV: kXnkP: goto ufbZL; jLGTh: if (!(!$group === "\141\144\155\151\x6e" or !$group === "\x67\165\x72\165")) { goto kXnkP; } goto yqkww; yqkww: show_error("\110\x61\x6e\x79\x61\40\101\144\x6d\x69\x6e\151\163\x74\162\141\x74\157\162\40\171\141\x6e\147\x20\144\x69\142\x65\x72\x69\x20\150\x61\x6b\40\165\156\164\165\153\x20\x6d\x65\156\x67\141\153\x73\x65\163\40\150\141\x6c\x61\155\x61\x6e\40\x69\156\151\54\40\x3c\x61\40\x68\162\x65\x66\75\x22" . base_url("\x64\x61\163\x68\142\x6f\x61\x72\144") . "\42\76\x4b\145\155\142\x61\154\x69\40\x6b\145\40\x6d\145\x6e\x75\40\141\x77\141\x6c\x3c\x2f\x61\76", 403, "\x41\153\163\145\163\40\124\x65\162\154\141\162\x61\x6e\147"); goto TdEKV; ufbZL: } public function output_json($data, $encode = true) { goto fayz5; fayz5: if (!$encode) { goto cJ2Po; } goto ndkCM; zpnGA: cJ2Po: goto lcKjX; ndkCM: $data = json_encode($data); goto zpnGA; lcKjX: $this->output->set_content_type("\x61\x70\160\154\x69\143\x61\x74\x69\x6f\x6e\x2f\152\163\x6f\x6e")->set_output($data); goto SVOyW; SVOyW: } public function data() { goto Y2Upt; rFMw7: $smt = $this->dashboard->getSemesterActive(); goto z5zkd; Y2Upt: $this->is_has_access(); goto Yx5ak; Yx5ak: $tp = $this->dashboard->getTahunActive(); goto rFMw7; z5zkd: $this->output_json($this->users->getUserSiswa($tp->id_tp, $smt->id_smt), false); goto in3IW; in3IW: } public function index() { goto G9MLu; DDshA: $this->load->view("\137\x74\145\155\x70\x6c\141\164\x65\163\x2f\x64\141\163\150\142\157\141\x72\x64\57\137\x68\x65\141\144\x65\162", $data); goto uLROQ; wbQ_m: $user = $this->ion_auth->user()->row(); goto mewOq; G9MLu: $this->is_has_access(); goto wbQ_m; pU0Gs: $data["\x74\160"] = $this->dashboard->getTahun(); goto nXGbG; W1f_i: $data["\x73\x6d\x74\x5f\x61\143\x74\151\166\x65"] = $this->dashboard->getSemesterActive(); goto DDshA; nXGbG: $data["\164\x70\x5f\x61\x63\x74\x69\166\x65"] = $this->dashboard->getTahunActive(); goto P3nsp; P3nsp: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto W1f_i; uLROQ: $this->load->view("\165\x73\145\x72\x73\x2f\x73\151\163\167\141\x2f\144\x61\164\141"); goto lkHfh; lkHfh: $this->load->view("\137\x74\x65\x6d\x70\x6c\x61\x74\x65\x73\x2f\x64\141\163\x68\142\x6f\x61\162\144\57\x5f\146\x6f\x6f\164\145\x72"); goto d2Sw3; mewOq: $data = ["\x75\163\x65\162" => $user, "\152\x75\x64\x75\154" => "\x55\x73\x65\x72\x20\115\x61\156\x61\x67\145\155\145\x6e\x74", "\x73\x75\x62\x6a\165\x64\x75\x6c" => "\x44\x61\x74\x61\x20\125\163\x65\162\x20\x53\x69\x73\167\x61", "\160\x72\157\x66\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\164\151\156\x67" => $this->dashboard->getSetting()]; goto pU0Gs; d2Sw3: } public function list() { goto HNpHS; z4533: $tp = $this->dashboard->getTahunActive(); goto C9gcQ; dnXmx: $this->output_json($data); goto OIatE; OT1Zy: $offset = ($page - 1) * $limit; goto z4533; niOsS: $data = ["\154\151\163\164\x73" => $lists, "\x74\157\x74\x61\154" => $count_siswa, "\160\x61\147\x65\163" => ceil($count_siswa / $limit), "\163\x65\x61\x72\143\x68" => $search, "\160\x65\162\x70\141\147\145" => $limit]; goto dnXmx; ov0lP: $count_siswa = $this->users->getUserSiswaTotalPage($search); goto bqrfg; lM_or: $search = $this->input->post("\163\x65\141\x72\143\x68", true); goto OT1Zy; bqrfg: $lists = $this->users->getUserSiswaPage($tp->id_tp, $smt->id_smt, $offset, $limit, $search); goto niOsS; C9gcQ: $smt = $this->dashboard->getSemesterActive(); goto ov0lP; HNpHS: $page = $this->input->post("\160\x61\x67\145", true); goto cj0sB; cj0sB: $limit = $this->input->post("\x6c\x69\x6d\151\164", true); goto lM_or; OIatE: } private function registerSiswa($username, $password, $email, $additional_data, $group) { goto Ki8Tn; irCbA: $data["\151\x64"] = $reg; goto Yr7W2; duO_e: return $data; goto cw0F5; Yr7W2: if (!($reg == false)) { goto E61zH; } goto miLKH; Ki8Tn: $reg = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto dO8Bs; dO8Bs: $data["\163\164\141\164\x75\163"] = true; goto irCbA; X5R3E: E61zH: goto duO_e; miLKH: $data["\x73\x74\141\164\x75\x73"] = false; goto X5R3E; cw0F5: } private function aktifkan($siswa) { goto dqurp; R7Nvm: $deleted = $this->ion_auth->delete_user($user_siswa->id); goto rA1IB; dqurp: $nama = explode("\x20", $siswa->nama); goto nsNEs; pQqOC: $group = array("\x33"); goto mlihZ; wKBc3: if ($deleted) { goto OVvze; } goto yutyl; lWfrv: return $data; goto Sp0z_; nsNEs: $first_name = $nama[0]; goto D1TQI; mlihZ: $user_siswa = $this->db->get_where("\x75\163\145\x72\x73", "\x65\155\141\151\154\x3d\42" . $email . "\42")->row(); goto lNgcg; zW5AD: $data = ["\x73\164\141\x74\x75\163" => $reg, "\155\x73\x67" => !$reg ? "\x41\153\x75\x6e\x20" . $siswa->nama . "\40\147\141\x67\141\154\x20\x64\151\x61\x6b\x74\151\146\x6b\x61\x6e\56" : "\x41\x6b\165\x6e\40" . $siswa->nama . "\40\x64\151\x61\153\164\151\146\x6b\x61\156\x2e"]; goto ZSiX8; aUyKv: OVvze: goto VLOst; Em1Lj: $email = $siswa->nis . "\100\163\x69\x73\x77\141\56\x63\157\155"; goto rog0Z; ZSiX8: aGH6K: goto lWfrv; yutyl: $data = ["\163\x74\x61\x74\165\x73" => false, "\x6d\163\147" => "\x41\153\x75\156\x20\x73\151\x73\x77\x61\x20\164\x69\x64\x61\x6b\40\x74\x65\162\163\145\x64\151\x61\40\x28\163\x75\x64\141\150\40\144\151\147\x75\x6e\x61\x6b\141\x6e\51\56"]; goto jyj76; jyj76: goto aGH6K; goto aUyKv; D1TQI: $last_name = end($nama); goto T7NCT; rA1IB: HAxYW: goto wKBc3; BkWI5: $password = trim($siswa->password); goto Em1Lj; lNgcg: $deleted = true; goto HFQ9_; T7NCT: $username = trim($siswa->username); goto BkWI5; HFQ9_: if (!($user_siswa != null)) { goto HAxYW; } goto R7Nvm; rog0Z: $additional_data = ["\x66\x69\162\x73\x74\137\156\141\155\x65" => $first_name, "\x6c\x61\163\164\x5f\156\141\155\145" => $last_name]; goto pQqOC; VLOst: $reg = $this->registerSiswa($username, $password, $email, $additional_data, $group); goto zW5AD; Sp0z_: } public function activate($id) { goto a5XIv; eg0eu: $data = $this->aktifkan($siswa); goto nHvPR; a5XIv: $siswa = $this->users->getDataSiswa($id); goto eg0eu; nHvPR: $this->output_json($data); goto fvz3H; fvz3H: } public function aktifkanSemua() { goto v2wHJ; l3gEO: $data = ["\x73\164\141\x74\165\163" => true, "\x6a\165\x6d\154\141\x68" => $jum, "\x6d\x73\147" => $jum . "\40\163\151\x73\x77\141\40\144\151\141\x6b\164\151\x66\x6b\141\156\56"]; goto bRny_; pSd94: $jum = 0; goto LwEOf; v2wHJ: $siswaAktif = $this->users->getSiswaAktif(); goto pSd94; bRny_: $this->output_json($data); goto DTQL7; LwEOf: foreach ($siswaAktif as $siswa) { goto JEaJG; g0FV2: FUaF2: goto Vo4BU; Vo4BU: ijqk7: goto f81i1; MR0Wk: $jum += 1; goto g0FV2; zXey7: $this->aktifkan($siswa); goto MR0Wk; JEaJG: if (!($siswa->aktif == 0)) { goto FUaF2; } goto zXey7; f81i1: } goto WJA_4; WJA_4: WlAsG: goto l3gEO; DTQL7: } private function nonaktifkan($user, $nama) { goto EjfPU; ge8tZ: goto BLYd3; goto PE_I4; W8dRZ: if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) { goto fixaa; } goto sDRFd; sDRFd: $data = ["\x73\x74\141\164\x75\x73" => false, "\x6d\x73\x67" => "\101\x6e\x64\141\x20\x62\165\x6b\141\156\40\141\x64\155\151\x6e\56"]; goto ge8tZ; R2ZxW: YxT8s: goto j0bjm; ThjEQ: $deleted = $this->ion_auth->delete_user($user->id); goto yP2jo; PE_I4: fixaa: goto ThjEQ; EjfPU: if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) { goto YxT8s; } goto W8dRZ; tFaQv: BLYd3: goto mIjnO; mIjnO: goto toTDs; goto R2ZxW; j0bjm: $data = ["\163\x74\x61\x74\x75\163" => false, "\x6d\163\x67" => "\x59\x6f\x75\40\x6d\165\163\164\x20\142\x65\x20\x61\x6e\x20\x61\144\x6d\151\156\x69\163\164\x72\x61\164\x6f\x72\x20\164\157\x20\166\x69\x65\167\x20\164\150\x69\163\40\x70\x61\147\x65\x2e"]; goto OLNSr; OLNSr: toTDs: goto vA_EN; vA_EN: return $data; goto V92zz; yP2jo: $data = ["\163\164\141\164\x75\163" => $deleted, "\155\x73\x67" => $deleted ? "\x53\x69\163\x77\141\40" . urldecode($nama) . "\40\144\x69\156\x6f\156\141\153\x74\151\x66\153\x61\x6e\56" : "\x53\151\x73\167\141\x20" . urldecode($nama) . "\x20\x67\141\147\141\154\x20\144\x69\156\x6f\156\x61\x6b\164\151\x66\153\x61\x6e\x2e"]; goto tFaQv; V92zz: } public function deactivate($username, $nama) { goto NFasv; jkHQE: $this->output_json($data, true); goto CXp1A; lhXkw: $data = ["\163\x74\141\164\x75\x73" => false, "\155\x73\147" => "\x59\x6f\165\40\155\165\163\164\x20\142\145\40\x61\x6e\40\141\x64\155\x69\x6e\x69\163\164\162\141\164\x6f\x72\40\164\x6f\x20\x76\151\145\x77\40\x74\x68\x69\163\x20\160\x61\x67\145\56"]; goto SDbtR; O0BaZ: $user = $this->users->getUsers($username); goto WfDzQ; SDbtR: dQESr: goto jkHQE; RoITK: uH01z: goto lhXkw; DEVTV: goto dQESr; goto RoITK; NFasv: if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) { goto uH01z; } goto O0BaZ; WfDzQ: $data = $this->nonaktifkan($user, $nama); goto DEVTV; CXp1A: } public function nonaktifkanSemua() { goto ATmMz; NiJZ7: $this->output_json($data); goto x_vSj; qKK1h: $data = ["\163\164\x61\x74\165\x73" => true, "\x6a\165\155\154\x61\150" => $jum, "\x6d\163\x67" => $jum . "\40\x73\151\x73\167\x61\40\144\151\x6e\x6f\x6e\x61\x6b\x74\151\146\x6b\x61\x6e\x2e"]; goto NiJZ7; jVCOp: $jum = 0; goto IfPTf; ATmMz: $siswaAktif = $this->users->getSiswaAktif(); goto jVCOp; IfPTf: foreach ($siswaAktif as $siswa) { goto YvvVe; LUSi1: oDXTf: goto AGNOq; EDF_t: if ($del["\163\x74\x61\164\x75\163"]) { goto ciImu; } goto uNnJC; STl1J: $del = $this->nonaktifkan($siswa, $siswa->nama); goto EDF_t; BLr1b: rnMQs: goto jDX8M; AGNOq: V_Lrv: goto BLr1b; uNnJC: $this->output_json($del); goto WSkqy; YvvVe: if (!($siswa->aktif > 0)) { goto V_Lrv; } goto STl1J; q9Y2v: $jum += 1; goto LUSi1; WSkqy: goto oDXTf; goto KtdlS; KtdlS: ciImu: goto q9Y2v; jDX8M: } goto j9e1p; j9e1p: dYZLm: goto qKK1h; x_vSj: } public function edit($id) { goto Zgsy2; GNPoE: $this->load->view("\165\x73\x65\x72\x73\57\x73\x69\163\167\x61\x2f\x65\x64\151\x74"); goto hUCq9; OF7UB: $data["\x73\151\163\167\141"] = $siswa; goto SKMQH; Shx3z: goto F_RTc; goto vezv1; taGXR: $data["\x67\165\x72\165"] = $guru; goto tbSpZ; YdgO0: $data["\163\155\x74\137\141\143\164\x69\166\145"] = $smt; goto T_QGd; YGe0n: $smt = $this->dashboard->getSemesterActive(); goto P0uAB; Q1ARK: $user = $this->ion_auth->user()->row(); goto YTUaV; P0uAB: $siswa = $this->master->getDataSiswaById($tp->id_tp, $smt->id_smt, $id); goto Q1ARK; kIIGv: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto taGXR; vezv1: Y01W9: goto TSd1l; YTUaV: $data = ["\x75\x73\145\162" => $user, "\x6a\165\144\165\x6c" => "\x55\x73\x65\x72\40\x4d\141\x6e\141\x67\145\155\145\x6e\x74", "\x73\x75\x62\x6a\x75\144\165\x6c" => "\105\x64\151\164\x20\x44\x61\x74\141\x20\125\163\145\162", "\x73\x65\164\164\151\156\x67" => $this->dashboard->getSetting()]; goto OF7UB; cx3Lo: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto YdgO0; TSd1l: $data["\160\x72\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto p9_7G; T_QGd: if ($this->ion_auth->is_admin()) { goto Y01W9; } goto kIIGv; QMZkG: $this->load->view("\x5f\164\145\155\x70\154\141\164\x65\163\x2f\x64\x61\x73\150\x62\x6f\x61\x72\x64\x2f\x5f\x66\157\157\164\x65\162"); goto IGz8F; p9_7G: $this->load->view("\x5f\164\145\155\160\154\x61\164\x65\163\x2f\144\141\163\x68\x62\x6f\x61\162\x64\x2f\x5f\x68\x65\x61\x64\x65\x72", $data); goto pHbUT; tbSpZ: $this->load->view("\155\x65\x6d\x62\x65\x72\163\x2f\x67\165\x72\165\57\164\145\x6d\x70\x6c\141\164\x65\163\x2f\150\x65\141\x64\145\x72", $data); goto GNPoE; hUCq9: $this->load->view("\155\145\x6d\142\x65\162\163\57\x67\x75\162\x75\x2f\164\x65\155\x70\154\141\164\x65\x73\x2f\x66\157\x6f\164\x65\162"); goto Shx3z; Zgsy2: $tp = $this->dashboard->getTahunActive(); goto YGe0n; SKMQH: $data["\x74\x70"] = $this->dashboard->getTahun(); goto ubOoZ; pHbUT: $this->load->view("\x75\163\x65\x72\163\x2f\x73\151\x73\x77\141\x2f\x65\144\x69\164"); goto QMZkG; IGz8F: F_RTc: goto GggJX; ubOoZ: $data["\164\160\x5f\x61\x63\x74\151\x76\145"] = $tp; goto cx3Lo; GggJX: } public function update() { goto fhIy3; CQ9ny: $oldPass = $this->input->post("\157\154\144", true); goto ZRNyk; ZRNyk: $newPass = $this->input->post("\156\145\167", true); goto QfV8q; tYUf6: $this->form_validation->set_rules("\x6f\x6c\144", "\120\x61\163\163\x77\x6f\162\x64\40\x4c\141\155\x61", "\x72\145\x71\x75\x69\x72\145\x64\174\x6e\x75\x6d\145\x72\151\143\174\164\162\x69\x6d\174\x6d\151\156\137\x6c\x65\x6e\x67\x74\x68\133\x36\x5d"); goto x1haT; x1haT: $this->form_validation->set_rules("\x6e\145\x77", "\x50\x61\x73\163\x77\x6f\x72\x64\40\x42\x61\x72\165", "\x72\x65\161\165\x69\x72\x65\x64\x7c\x6e\x75\x6d\x65\162\x69\x63\x7c\x74\x72\x69\155\x7c\155\151\x6e\x5f\154\x65\x6e\147\x74\x68\133\x36\135"); goto VfO_q; PH00k: $username = $this->input->post("\165\x73\x65\x72\x6e\141\155\x65", true); goto CQ9ny; QfV8q: $this->form_validation->set_rules("\x75\163\145\162\156\x61\155\x65", "\x55\x73\145\162\x6e\x61\155\145", "\162\x65\161\x75\x69\x72\x65\144\174\x6e\x75\x6d\145\162\151\x63\174\164\162\x69\x6d\174\155\151\x6e\137\154\145\156\x67\164\150\x5b\66\135\174\151\x73\x5f\165\x6e\x69\x71\165\x65\x5b\155\141\x73\x74\145\162\x5f\x73\151\x73\167\141\x2e\165\x73\x65\x72\x6e\x61\x6d\145\135"); goto tYUf6; fhIy3: $id_siswa = $this->input->post("\151\144\x5f\163\x69\163\x77\x61", true); goto PH00k; VfO_q: } public function change_password() { goto mwuMj; nBHpf: $this->output_json($data); goto SxBxU; Q_Twe: $identity = $this->session->userdata("\x69\x64\x65\x6e\164\151\164\x79"); goto Efto7; WNE61: if ($change) { goto noCi1; } goto Vyro_; wbP2P: goto pkWE3; goto eJlrU; Efto7: $change = $this->ion_auth->change_password($identity, $this->input->post("\x6f\154\144"), $this->input->post("\x6e\x65\167")); goto WNE61; mwuMj: $this->form_validation->set_rules("\157\x6c\144", $this->lang->line("\143\150\141\x6e\147\x65\x5f\160\141\163\163\167\x6f\x72\x64\137\166\141\154\x69\x64\141\x74\151\x6f\x6e\x5f\x6f\x6c\x64\137\160\x61\x73\163\167\157\x72\x64\137\154\141\142\x65\x6c"), "\x72\145\x71\x75\151\162\x65\144"); goto gKjo3; lJ3QB: goto v26vY; goto MdBS6; gKjo3: $this->form_validation->set_rules("\156\x65\167", $this->lang->line("\143\150\141\156\147\x65\x5f\x70\141\x73\x73\167\157\162\144\x5f\166\x61\x6c\x69\144\141\x74\151\157\156\x5f\156\x65\x77\137\x70\141\x73\x73\167\157\x72\x64\x5f\x6c\141\x62\145\154"), "\162\145\161\165\151\162\x65\144\174\x6d\x69\x6e\137\154\x65\156\147\164\150\x5b" . $this->config->item("\155\x69\x6e\137\160\x61\163\x73\167\x6f\x72\x64\x5f\x6c\145\x6e\147\164\x68", "\151\x6f\156\x5f\141\165\164\x68") . "\x5d\x7c\x6d\141\x74\x63\x68\145\x73\x5b\x6e\x65\x77\137\x63\157\x6e\146\x69\162\155\135"); goto o9AXA; d1Sx5: pkWE3: goto lJ3QB; NQUql: $data = ["\163\164\x61\164\x75\x73" => false, "\x65\x72\x72\x6f\x72\x73" => ["\x6f\x6c\x64" => form_error("\x6f\154\x64"), "\x6e\x65\x77" => form_error("\x6e\145\x77"), "\156\145\x77\x5f\143\157\156\146\x69\x72\155" => form_error("\156\145\167\x5f\143\157\156\146\151\162\155")]]; goto Usq6D; iLcwS: $data["\163\164\x61\164\x75\163"] = true; goto d1Sx5; eJlrU: noCi1: goto iLcwS; o9AXA: $this->form_validation->set_rules("\x6e\x65\x77\x5f\143\157\x6e\x66\x69\x72\155", $this->lang->line("\x63\x68\x61\x6e\x67\x65\137\160\x61\x73\163\167\x6f\x72\x64\137\166\141\154\151\x64\141\x74\x69\x6f\x6e\x5f\x6e\x65\x77\137\x70\x61\x73\163\x77\157\162\x64\137\143\x6f\x6e\x66\151\162\155\x5f\154\x61\x62\x65\154"), "\162\x65\161\x75\x69\162\145\x64"); goto MGPJw; Usq6D: v26vY: goto nBHpf; MGPJw: if ($this->form_validation->run() === FALSE) { goto akucJ; } goto Q_Twe; Vyro_: $data = ["\163\164\x61\x74\165\163" => false, "\x6d\x73\x67" => $this->ion_auth->errors()]; goto wbP2P; MdBS6: akucJ: goto NQUql; SxBxU: } public function delete($id) { goto fWT3A; ImcHi: $data["\x73\164\141\x74\x75\x73"] = $this->ion_auth->delete_user($id) ? true : false; goto ViFEE; fWT3A: $this->is_has_access(); goto ImcHi; ViFEE: $this->output_json($data); goto uO79y; uO79y: } private function hash_password($password) { goto M2tN1; OStVH: return password_hash($password, PASSWORD_BCRYPT); goto U0GZn; M2tN1: if (!(empty($password) || strpos($password, "\x0") !== FALSE || strlen($password) > 4096)) { goto lEDYn; } goto uZ6hV; uZ6hV: return FALSE; goto oL45E; oL45E: lEDYn: goto OStVH; U0GZn: } }