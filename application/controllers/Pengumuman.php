<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Pengumuman extends CI_Controller { public function __construct() { goto s2tFd; qFlxP: $this->load->model("\x44\141\x73\x68\142\x6f\141\162\144\x5f\x6d\x6f\144\x65\x6c", "\x64\x61\163\x68\142\157\x61\162\144"); goto GQAZR; WIhk2: gHqb_: goto EJkGP; NeANh: redirect("\x61\x75\x74\150"); goto VX7Ot; Mcevi: $this->load->library(["\x64\141\x74\141\164\x61\142\154\x65\x73", "\146\x6f\x72\155\x5f\166\141\x6c\x69\144\x61\x74\x69\x6f\x6e"]); goto tHKN1; EQw1r: if (!$this->ion_auth->logged_in()) { goto lE_Yy; } goto e3LPD; wMiPn: show_error("\x48\141\x6e\171\141\x20\101\x64\155\x69\156\151\x73\x74\x72\x61\x74\x6f\x72\x20\x64\x61\156\x20\x67\165\162\165\40\x79\141\x6e\x67\x20\144\x69\x62\x65\162\151\40\150\141\x6b\40\165\156\x74\x75\x6b\40\x6d\145\156\147\x61\153\x73\145\x73\40\x68\141\x6c\x61\155\141\156\x20\x69\156\x69\54\40\74\x61\40\x68\162\x65\x66\x3d\42" . base_url("\x64\141\163\x68\142\157\141\x72\144") . "\42\76\113\145\155\142\141\x6c\151\x20\x6b\145\40\155\x65\156\165\40\141\167\x61\x6c\74\57\141\x3e", 403, "\101\x6b\163\145\x73\x20\124\x65\x72\x6c\141\x72\141\x6e\x67"); goto WIhk2; VX7Ot: Zjs4P: goto Mcevi; EJkGP: goto Zjs4P; goto LVYON; YUWNv: $this->load->model("\x50\x6f\x73\164\137\x6d\157\144\x65\x6c", "\160\x6f\163\164"); goto bBxfM; bBxfM: $this->form_validation->set_error_delimiters('', ''); goto AL5Pg; GQAZR: $this->load->model("\113\145\154\141\x73\137\x6d\x6f\144\x65\154", "\x6b\145\154\x61\163"); goto hnVro; s2tFd: parent::__construct(); goto EQw1r; e3LPD: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\165"))) { goto gHqb_; } goto wMiPn; tHKN1: $this->load->model("\x4d\141\163\x74\145\162\x5f\155\x6f\x64\x65\154", "\x6d\x61\163\x74\145\x72"); goto qFlxP; hnVro: $this->load->model("\104\x72\157\x70\x64\x6f\x77\156\x5f\x6d\x6f\144\145\x6c", "\x64\x72\157\x70\144\x6f\167\x6e"); goto YUWNv; LVYON: lE_Yy: goto NeANh; AL5Pg: } public function output_json($data, $encode = true) { goto EkiVk; pjA95: $data = json_encode($data); goto ouHDE; EkiVk: if (!$encode) { goto h9oQc; } goto pjA95; ouHDE: h9oQc: goto en6CN; en6CN: $this->output->set_content_type("\141\160\x70\x6c\x69\143\x61\164\151\157\x6e\57\x6a\x73\157\156")->set_output($data); goto ogLly; ogLly: } public function index() { goto tm1Hh; AM9SK: $data["\x73\x6d\x74\x5f\141\143\x74\x69\x76\145"] = $smt; goto tbeAf; GUlvd: J0_2x: goto EbuTu; M1Erm: $this->load->view("\155\145\155\x62\145\x72\x73\57\x67\x75\x72\165\57\x74\x65\x6d\x70\154\141\164\x65\163\x2f\150\x65\x61\144\x65\162", $data); goto zrSdg; XYLd0: $data["\x6b\x65\x6c\141\x73"] = $kelas; goto aOBZ0; aqG6s: $data["\x74\160\x5f\141\x63\x74\x69\166\x65"] = $tp; goto uymwf; WREtx: $this->load->view("\x70\145\x6e\147\x75\155\x75\155\x61\156\57\144\141\x74\141"); goto sE2WK; uymwf: $data["\163\155\164"] = $this->dashboard->getSemester(); goto AM9SK; NzvuU: $this->load->view("\137\164\145\155\160\154\x61\164\x65\x73\x2f\144\x61\163\150\x62\157\x61\162\x64\57\137\x68\x65\x61\144\x65\x72", $data); goto WREtx; Zc4bh: $tp = $this->master->getTahunActive(); goto XynR1; tm1Hh: $user = $this->ion_auth->user()->row(); goto Rk41O; SfZLF: if ($this->ion_auth->is_admin()) { goto J0_2x; } goto U7b3i; XynR1: $smt = $this->master->getSemesterActive(); goto FnvwO; WBfFh: $data["\160\x65\156\x67\x75\x6d\x75\x6d\x61\x6e\x73"] = $this->post->getPostUser(0); goto NzvuU; EnznL: $data["\x70\162\x6f\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto WBfFh; aOBZ0: $data["\162\x75\x6e\x6e\x69\x6e\x67\137\x74\x65\x78\164"] = $this->dashboard->getRunningText(); goto SfZLF; z1_z5: $data["\x70\x65\156\x67\x75\155\x75\155\141\156\x73"] = $this->post->getPostUser($guru->id_guru); goto M1Erm; Rk41O: $data = ["\x75\163\x65\162" => $user, "\152\x75\x64\165\x6c" => "\120\145\x6e\x67\x75\155\165\x6d\141\x6e", "\163\145\164\164\x69\156\x67" => $this->dashboard->getSetting()]; goto Zc4bh; tbeAf: $data["\x67\x75\162\x75\163"] = $this->dropdown->getAllGuru(); goto eQMqz; p6WKz: goto IcoMc; goto GUlvd; Y9wpn: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto op19K; eQMqz: $kelas = $this->dropdown->getAllKeyKodeKelas($tp->id_tp, $smt->id_smt); goto XYLd0; zrSdg: $this->load->view("\x70\145\156\x67\165\x6d\165\x6d\141\x6e\x2f\144\141\x74\x61"); goto tPdUO; FnvwO: $data["\164\160"] = $this->dashboard->getTahun(); goto aqG6s; sE2WK: $this->load->view("\x5f\164\145\155\160\x6c\x61\164\x65\163\x2f\x64\x61\163\x68\142\157\x61\162\x64\57\137\146\157\157\164\145\x72"); goto VT6BV; tPdUO: $this->load->view("\x6d\x65\155\x62\145\162\x73\57\147\x75\x72\x75\x2f\164\x65\155\160\154\141\x74\x65\x73\x2f\146\157\x6f\164\x65\x72"); goto p6WKz; U7b3i: $data["\163\x75\142\x6a\165\x64\165\x6c"] = "\x50\145\x6e\x67\x75\155\165\155\x61\156\40\101\156\x64\141"; goto Y9wpn; EbuTu: $data["\x73\165\x62\x6a\165\x64\x75\154"] = "\x53\145\x6d\165\x61\40\120\145\156\x67\x75\x6d\165\x6d\141\x6e"; goto EnznL; op19K: $data["\147\x75\x72\165"] = $guru; goto z1_z5; VT6BV: IcoMc: goto qrbSJ; qrbSJ: } public function kepada($kepada, $id_kepada = null) { goto nEHa9; KmPkW: TDnok: goto DTQ0O; T3MOC: $data["\153\x65\x6c\x61\163"] = $kelas; goto PAwdW; r05Q5: $this->db->order_by("\x61\56\x74\141\x6e\x67\x67\141\154", "\144\145\163\143"); goto vusUa; PAwdW: $this->db->select("\141\56\x2a\54\x20\x62\56\x6e\x61\155\x61\x5f\147\x75\162\x75\54\x20\x62\56\x66\157\164\157"); goto Kv2Zf; X97Hq: $data["\153\145\x70\141\x64\x61"] = urldecode($kepada); goto a9cma; b2U3s: $this->load->view("\137\164\145\x6d\x70\154\x61\x74\x65\x73\x2f\x64\141\x73\150\x62\x6f\x61\162\x64\x2f\x5f\146\157\x6f\164\x65\x72"); goto rYPsr; p3_UY: $this->db->join("\x6d\x61\x73\x74\x65\162\x5f\147\x75\162\x75\x20\142", "\141\56\144\x61\x72\x69\75\x62\56\151\144\137\x67\x75\162\165", "\154\x65\x66\164"); goto r05Q5; M99SS: $balasan = []; goto uz2ay; xNFyr: $data = ["\x75\x73\145\x72" => $user, "\x6a\x75\x64\165\154" => "\x50\x65\x6e\147\165\155\165\x6d\x61\x6e", "\x73\165\x62\152\165\x64\165\x6c" => "\123\x65\155\165\x61\40\x50\145\x6e\x67\x75\155\x75\x6d\x61\x6e", "\163\145\x74\164\x69\x6e\147" => $this->dashboard->getSetting()]; goto SiB7O; nEHa9: $user = $this->ion_auth->user()->row(); goto xNFyr; rCsE1: $data["\x6b\x65\x70\x61\144\x61"] = "\x53\x65\x6d\x75\141\x20\107\x75\x72\x75"; goto jKxas; Kv2Zf: $this->db->from("\x70\x6f\x73\x74\x20\x61"); goto p3_UY; vusUa: $pengumumans = $this->db->get()->result(); goto kFnj6; bbUAG: $data["\x74\160\x5f\141\x63\x74\x69\x76\x65"] = $tp; goto aXCmV; tZEEE: RlXn6: goto U1o0O; nqAYt: $this->load->view("\x70\x65\156\147\x75\x6d\165\x6d\141\156\57\x64\141\164\141"); goto CBpat; tVBYf: goto mt5hA; goto N3yJL; QEQ7x: HRc46: goto mfpJ3; zLG7e: $smt = $this->master->getSemesterActive(); goto ePznU; DTQ0O: $data["\160\x65\x6e\147\165\155\165\155\141\x6e\x73"] = $pengumumans; goto uEb3J; DlIYi: LJoG7: goto rCsE1; SiB7O: $tp = $this->master->getTahunActive(); goto zLG7e; mfpJ3: $data["\x6b\145\x70\141\144\141"] = "\x53\145\155\x75\x61\40\123\151\x73\x77\x61"; goto tZEEE; Rk0LF: $data["\160\162\157\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto cNuaw; HQDQc: if ($kepada === "\x73\x65\155\165\141\137\163\x69\x73\167\x61") { goto HRc46; } goto X97Hq; r35BI: $data["\x67\165\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto cqqCD; PBkp3: $this->load->view("\x70\145\156\x67\x75\x6d\x75\155\141\x6e\x2f\144\141\164\141"); goto b2U3s; cNuaw: $this->load->view("\x5f\x74\x65\155\160\x6c\x61\x74\x65\163\x2f\144\x61\163\150\x62\x6f\141\162\144\x2f\137\150\145\141\x64\x65\x72", $data); goto PBkp3; cqqCD: $this->load->view("\155\x65\x6d\x62\145\x72\163\x2f\147\165\162\165\x2f\x74\x65\155\x70\154\141\x74\145\163\x2f\150\145\141\x64\x65\x72", $data); goto nqAYt; m6hTs: $data["\x67\165\x72\165\163"] = $this->dropdown->getAllGuru(); goto ygCvZ; ePznU: $data["\164\x70"] = $this->dashboard->getTahun(); goto bbUAG; ygCvZ: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto T3MOC; aXCmV: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto q5r7H; IkMYe: if ($kepada === "\163\145\x6d\x75\141\137\147\x75\162\165") { goto LJoG7; } goto HQDQc; q5r7H: $data["\163\x6d\164\137\x61\x63\x74\x69\166\x65"] = $smt; goto m6hTs; kFnj6: $comments = []; goto M99SS; a9cma: goto RlXn6; goto DlIYi; rYPsr: mt5hA: goto QzPZQ; jKxas: goto RlXn6; goto QEQ7x; CBpat: $this->load->view("\155\145\x6d\142\x65\x72\163\57\x67\165\162\x75\57\164\x65\x6d\160\154\x61\164\x65\163\x2f\146\157\x6f\164\x65\x72"); goto tVBYf; uEb3J: $data["\x63\x6f\155\x6d\145\156\x74\x73"] = $comments; goto C7q0x; N3yJL: v6tMO: goto Rk0LF; C7q0x: $data["\142\141\x6c\141\163\x61\156\x73"] = $balasan; goto IkMYe; uz2ay: foreach ($pengumumans as $pengumuman) { goto RpIRx; t69V0: S1diW: goto zc_Zx; IdtAR: $this->db->from("\160\157\163\x74\x5f\x63\x6f\x6d\x6d\x65\x6e\164\x73\40\x61"); goto O8y50; O8y50: $this->db->join("\x6d\141\163\x74\145\x72\x5f\147\x75\162\x75\x20\x62", "\x61\56\x64\x61\x72\151\x3d\142\x2e\x69\x64\x5f\147\165\162\x75", "\x6c\145\146\x74"); goto iO_RQ; Xm_nM: $this->db->where("\141\x2e\151\144\x5f\x70\x6f\x73\x74", $pengumuman->id_post); goto Fby2H; iO_RQ: $this->db->order_by("\141\x2e\164\141\x6e\147\147\x61\x6c", "\x64\145\163\143"); goto Xm_nM; xRJlX: pg2g6: goto QsBmw; Fby2H: $comment = $this->db->get()->result(); goto rp2g1; zc_Zx: $comments[$pengumuman->id_post] = $comment; goto xRJlX; rp2g1: foreach ($comment as $comm) { goto VG5Vd; VG5Vd: $this->db->select("\141\56\52\54\x20\x62\56\156\141\155\141\137\147\165\162\165\x2c\x20\142\56\146\x6f\164\157"); goto SPhVi; rjvww: $this->db->join("\x6d\x61\x73\x74\x65\162\137\x67\165\162\x75\x20\142", "\141\56\144\x61\162\151\75\142\x2e\x69\144\137\x67\x75\x72\165", "\x6c\145\146\x74"); goto PY8rt; HngbN: fLYoh: goto MEGNn; PY8rt: $this->db->order_by("\x61\x2e\x74\x61\156\147\x67\x61\x6c", "\x64\x65\x73\x63"); goto ctb5k; SPhVi: $this->db->from("\x70\157\163\x74\x5f\x72\x65\x70\x6c\171\40\141"); goto rjvww; ctb5k: $this->db->where("\141\x2e\151\x64\x5f\x63\x6f\x6d\155\x65\156\x74", $comm->id_comment); goto Yo9gv; Yo9gv: $balasan[$pengumuman->id_post][$comm->id_comment] = $this->db->get()->result(); goto HngbN; MEGNn: } goto t69V0; RpIRx: $this->db->select("\141\x2e\52\x2c\x20\x62\x2e\x6e\x61\x6d\141\x5f\x67\x75\x72\165\54\40\142\x2e\x66\157\x74\x6f"); goto IdtAR; QsBmw: } goto KmPkW; U1o0O: if ($this->ion_auth->is_admin()) { goto v6tMO; } goto r35BI; QzPZQ: } public function getPost() { $post = $this->post->getPostForUser(null); $this->output_json($post); } public function getComment($id_post, $page) { goto ycR9N; kAiAV: $this->db->from("\x70\x6f\163\x74\x5f\143\157\x6d\155\145\156\x74\x73\40\141"); goto Rym6l; XgOmx: $this->db->select("\141\x2e\x2a\54\x20\x62\56\x6e\x61\x6d\x61\x5f\x67\x75\x72\165\x2c\40\x62\56\146\157\164\x6f\54\40\143\x2e\x6e\x61\155\x61\40\141\163\x20\x6e\x61\155\x61\x5f\x73\151\163\x77\141\54\x20\x63\x2e\146\157\164\157\x20\x61\x73\x20\146\157\164\157\x5f\x73\x69\x73\x77\x61\x2c\40\x28\x53\x45\114\x45\x43\124\x20\103\117\x55\x4e\124\x28\160\x6f\163\x74\x5f\162\145\x70\154\x79\56\x69\144\137\x72\x65\x70\x6c\171\x29\40\x46\x52\117\115\40\x70\x6f\163\164\x5f\x72\x65\160\154\171\40\x57\110\x45\122\x45\40\141\56\151\144\137\x63\157\x6d\x6d\x65\x6e\164\40\75\x20\160\x6f\163\x74\137\x72\145\160\x6c\x79\56\x69\144\x5f\x63\157\155\x6d\x65\156\x74\x29\x20\101\x53\40\x6a\x6d\x6c"); goto kAiAV; aCeDp: $comment = $this->db->get()->result(); goto uqch5; IPKyt: $offset = $page * $perPage; goto O1YCI; Poda8: $this->db->where("\141\x2e\x69\x64\137\160\x6f\163\164", $id_post); goto nWELw; uqch5: $this->output_json($comment); goto EOc36; Rhlo6: $this->db->order_by("\141\56\x74\141\156\147\147\x61\154", "\144\145\x73\x63"); goto Poda8; nWELw: $this->db->limit($perPage, $offset); goto aCeDp; Rym6l: $this->db->join("\x6d\x61\163\164\x65\x72\137\x67\x75\x72\165\40\142", "\141\x2e\x64\x61\x72\x69\75\x62\x2e\151\x64\137\x67\165\162\x75", "\x6c\145\x66\x74"); goto wH9Zy; O1YCI: $this->db->query("\123\x45\x54\x20\123\121\x4c\x5f\102\x49\107\x5f\x53\x45\x4c\105\x43\124\x53\x3d\x31"); goto XgOmx; wH9Zy: $this->db->join("\x6d\x61\x73\164\145\x72\137\x73\x69\x73\x77\x61\x20\x63", "\141\x2e\144\141\x72\151\x3d\x63\56\x69\x64\137\163\x69\x73\x77\x61", "\154\x65\146\164"); goto Rhlo6; ycR9N: $perPage = 5; goto IPKyt; EOc36: } public function getReplies($id_comment, $page) { goto RQaLC; IqQFa: $this->output_json($replies); goto a4YKC; VZqpb: $replies = $this->db->get()->result(); goto IqQFa; bClfk: $this->db->select("\x61\x2e\52\54\40\142\x2e\156\141\x6d\x61\x5f\x67\x75\x72\165\x2c\40\x62\x2e\x66\157\164\157\54\40\x63\x2e\x6e\141\x6d\x61\40\x61\163\40\x6e\x61\x6d\x61\x5f\x73\x69\163\167\141\x2c\x20\143\x2e\146\x6f\x74\x6f\40\141\163\x20\146\157\x74\x6f\137\163\151\163\x77\141"); goto XhNm7; RQaLC: $perPage = 5; goto hu6sL; jwNGW: $this->db->limit($perPage, $offset); goto VZqpb; DrCNq: $this->db->join("\155\141\x73\x74\x65\162\137\x67\x75\162\x75\40\x62", "\141\56\x64\141\162\x69\x3d\x62\56\x69\144\137\147\x75\x72\165", "\154\145\146\164"); goto lKXXO; zMtip: $this->db->where("\141\x2e\151\x64\x5f\x63\157\x6d\155\x65\x6e\164", $id_comment); goto jwNGW; hu6sL: $offset = $page * $perPage; goto nHQVz; lKXXO: $this->db->join("\155\141\163\164\x65\162\137\163\x69\x73\x77\141\40\x63", "\141\56\x64\x61\162\x69\75\143\56\x69\x64\137\163\x69\x73\x77\141", "\154\x65\146\164"); goto R6Vdw; nHQVz: $this->db->query("\x53\105\x54\x20\x53\x51\x4c\x5f\x42\111\107\x5f\x53\105\x4c\x45\103\124\x53\x3d\x31"); goto bClfk; XhNm7: $this->db->from("\160\x6f\x73\x74\x5f\x72\145\x70\x6c\171\x20\141"); goto DrCNq; R6Vdw: $this->db->order_by("\141\56\x74\141\156\x67\147\141\x6c", "\144\145\x73\143"); goto zMtip; a4YKC: } public function save() { goto oZNOa; rvnPL: $data = ["\x6b\x65\x70\141\144\x61" => serialize($kepada), "\144\x61\162\151" => $dari, "\144\x61\162\151\137\147\x72\157\x75\x70" => $dari == "\60" ? "\x31" : "\62", "\164\x65\170\x74" => $this->input->post("\x74\145\x78\x74"), "\x74\141\156\147\x67\x61\x6c" => date("\131\x2d\155\x2d\144\x20\110\72\151\72\x73"), "\165\160\x64\141\164\x65\144" => date("\131\x2d\x6d\x2d\x64\x20\x48\72\x69\x3a\163")]; goto uTO9i; Y6V7y: $dari = $this->input->post("\144\141\162\151"); goto rvnPL; EgFfb: $this->output_json($insert); goto RAcIO; uTO9i: $insert = $this->db->replace("\x70\x6f\163\164", $data); goto EgFfb; oZNOa: $kepada = json_decode(json_encode($this->input->post("\153\x65\160\x61\144\x61\133\135", true))); goto Y6V7y; RAcIO: } public function saveKomentar() { goto qgVDR; Q8RDe: $dari_group = 1; goto YnIky; Bjy3n: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto f5Gr0; Y46Db: $user = $this->ion_auth->user()->row(); goto TgZjW; g2Iof: kvWsF: goto fyr54; gvt1o: $this->db->select("\x61\x2e\x2a\54\x20\142\x2e\156\141\155\141\x5f\x67\x75\x72\165\x2c\x20\x62\56\146\157\164\x6f\x2c\x20\143\x2e\x6e\x61\x6d\141\40\x61\163\x20\156\141\x6d\x61\x5f\x73\x69\163\167\141\54\x20\143\56\146\157\164\x6f\40\141\163\40\x66\157\x74\157\x5f\163\x69\x73\x77\141\54\40\50\123\x45\114\105\x43\x54\40\x43\117\x55\x4e\x54\x28\160\157\x73\x74\x5f\162\145\160\154\x79\56\x69\x64\137\162\145\160\154\x79\51\x20\x46\122\117\x4d\x20\160\157\163\x74\x5f\x72\x65\160\154\x79\x20\x57\x48\105\122\x45\40\141\56\x69\x64\x5f\x63\x6f\x6d\155\145\x6e\x74\40\75\x20\160\x6f\163\x74\137\162\145\x70\154\171\x2e\151\x64\x5f\x63\157\x6d\x6d\145\156\x74\x29\x20\x41\123\40\152\x6d\x6c"); goto vivD0; f5Gr0: $dari = $guru->id_guru; goto xXh27; pcu38: $this->db->where("\141\56\x69\144\x5f\x63\x6f\155\x6d\145\x6e\x74", $id); goto lZVX8; wIPsC: $id = $this->db->insert_id(); goto y1EWP; qWVGA: $this->output_json($comment); goto ZW7cF; YnIky: if ($this->ion_auth->is_admin()) { goto kvWsF; } goto Y46Db; xXh27: $dari_group = 2; goto g2Iof; y1EWP: $this->db->query("\x53\x45\124\x20\123\121\114\137\102\111\107\137\123\x45\x4c\x45\103\124\123\75\x31"); goto gvt1o; lZVX8: $comment = $this->db->get()->result(); goto qWVGA; qgVDR: $dari = "\60"; goto Q8RDe; aef05: $this->db->join("\155\x61\163\x74\145\x72\x5f\x73\151\163\x77\141\x20\x63", "\141\x2e\144\141\162\x69\75\x63\56\x69\x64\x5f\163\151\x73\167\141", "\x6c\x65\x66\164"); goto tgQSb; fiC0O: $insert = $this->db->replace("\x70\157\x73\x74\x5f\x63\x6f\155\x6d\x65\x6e\164\163", $data); goto wIPsC; TgZjW: $tp = $this->master->getTahunActive(); goto ic3Ue; fyr54: $data = ["\151\x64\137\160\x6f\x73\164" => $this->input->post("\151\x64\x5f\160\x6f\163\164"), "\x64\141\x72\x69" => $dari, "\144\141\162\151\x5f\147\162\157\165\160" => $dari_group, "\164\x65\x78\164" => $this->input->post("\x74\x65\170\x74")]; goto fiC0O; ic3Ue: $smt = $this->master->getSemesterActive(); goto Bjy3n; vivD0: $this->db->from("\x70\x6f\163\x74\137\x63\157\x6d\155\145\x6e\x74\163\x20\x61"); goto T97bs; tgQSb: $this->db->order_by("\x61\56\x74\141\x6e\x67\147\x61\154", "\144\145\x73\x63"); goto pcu38; T97bs: $this->db->join("\x6d\141\x73\x74\x65\162\137\147\165\x72\x75\x20\x62", "\x61\56\x64\x61\162\x69\75\x62\x2e\151\x64\137\x67\x75\162\x75", "\154\145\x66\x74"); goto aef05; ZW7cF: } public function saveBalasan() { goto QSuwl; vSYu9: aFaCr: goto eVBRe; xkpl0: $this->db->order_by("\x61\x2e\x74\141\156\x67\x67\x61\x6c", "\144\145\x73\x63"); goto zBE6n; vQowt: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ENxRY; mAqnI: $this->db->join("\x6d\141\x73\164\145\x72\137\x67\x75\x72\165\x20\x62", "\x61\56\x64\141\x72\151\x3d\x62\x2e\x69\144\x5f\x67\x75\x72\x75", "\154\x65\x66\164"); goto Oxul8; zUO0Y: $this->db->from("\x70\157\163\164\x5f\x72\x65\160\154\171\x20\141"); goto mAqnI; QSuwl: $dari = "\x30"; goto eHrYR; MiqX_: $this->db->select("\x61\x2e\x2a\54\40\142\56\x6e\141\x6d\141\137\147\x75\162\x75\54\x20\142\x2e\x66\157\164\157\54\x20\143\56\x6e\x61\155\x61\x20\141\163\40\x6e\x61\155\x61\x5f\163\x69\163\x77\x61\54\x20\143\56\x66\x6f\x74\157\40\x61\163\40\146\x6f\x74\157\x5f\x73\151\x73\x77\x61"); goto zUO0Y; zBE6n: $this->db->where("\141\x2e\x69\x64\137\162\145\x70\x6c\171", $id); goto AetEK; AetEK: $replies = $this->db->get()->result(); goto V4lLb; eHrYR: $dari_group = 1; goto U0d1_; AwK2i: $smt = $this->master->getSemesterActive(); goto vQowt; MMnCh: $dari_group = 2; goto vSYu9; qDuPg: $tp = $this->master->getTahunActive(); goto AwK2i; yQLAh: $this->db->query("\x53\x45\124\40\x53\x51\114\x5f\x42\111\x47\x5f\123\x45\114\105\x43\x54\123\x3d\x31"); goto MiqX_; D0Uxm: $user = $this->ion_auth->user()->row(); goto qDuPg; Oxul8: $this->db->join("\155\141\x73\x74\x65\162\137\163\151\x73\x77\x61\40\x63", "\141\56\x64\x61\162\151\75\x63\56\151\x64\x5f\x73\151\x73\167\141", "\154\x65\x66\164"); goto xkpl0; B8QuH: $id = $this->db->insert_id(); goto yQLAh; eVBRe: $data = ["\151\x64\137\143\157\x6d\x6d\145\x6e\164" => $this->input->post("\x69\144\137\x63\157\x6d\155\x65\x6e\x74"), "\144\141\x72\151" => $dari, "\x64\x61\x72\151\x5f\x67\162\157\x75\x70" => $dari_group, "\164\145\x78\164" => $this->input->post("\164\x65\x78\164")]; goto gteYW; V4lLb: $this->output_json($replies); goto B1Lql; U0d1_: if ($this->ion_auth->is_admin()) { goto aFaCr; } goto D0Uxm; ENxRY: $dari = $guru->id_guru; goto MMnCh; gteYW: $insert = $this->db->replace("\160\157\x73\164\137\162\145\160\154\x79", $data); goto B8QuH; B1Lql: } public function hapusPost($id_post) { goto kNkT6; d0zgy: foreach ($comments as $comment) { goto pzm7c; pzm7c: $this->db->where("\151\x64\x5f\x63\157\155\155\145\x6e\164", $comment->id_comment); goto P_58u; LhRtJ: BFXNw: goto sxWKl; P_58u: $deleted["\x62\x61\x6c\x61\163\x61\x6e"] = $this->db->delete("\x70\x6f\x73\x74\x5f\162\145\x70\154\x79"); goto LhRtJ; sxWKl: } goto J4Plr; U0nVW: $comments = $this->post->getIdComments($id_post); goto d0zgy; oeEi9: $this->db->where("\151\x64\137\x70\157\163\164", $id_post); goto LTQSv; xFJjj: $this->output_json($deleted); goto ZNhOM; kNkT6: $this->db->trans_start(); goto U0nVW; LTQSv: if (!$this->db->delete("\x70\157\x73\164\x5f\x63\157\155\x6d\145\x6e\x74\163")) { goto pYhSS; } goto Ncbv_; Kqd3Q: $deleted = $this->db->delete("\160\x6f\x73\164"); goto Nbo6M; Nbo6M: pYhSS: goto BKYMf; J4Plr: Oa8fG: goto oeEi9; Ncbv_: $this->db->where("\151\144\137\160\x6f\163\x74", $id_post); goto Kqd3Q; BKYMf: $this->db->trans_complete(); goto xFJjj; ZNhOM: } public function hapusKomentar($id_comment) { goto BCyqP; enHR6: $deleted["\153\x6f\155\145\156\x74\141\x72"] = $this->db->delete("\x70\157\163\x74\x5f\143\x6f\x6d\x6d\x65\156\164\x73"); goto VzPXL; xJQ6y: $this->output_json($deleted); goto X2c0Y; P5BnW: $this->db->trans_complete(); goto xJQ6y; VzPXL: $this->db->where("\151\144\x5f\143\157\x6d\155\x65\156\164", $id_comment); goto IhXZt; IhXZt: $deleted["\x62\141\x6c\x61\x73\x61\x6e"] = $this->db->delete("\x70\x6f\163\164\x5f\162\145\160\x6c\171"); goto P5BnW; N9znC: $this->db->where("\151\144\137\x63\x6f\x6d\155\x65\x6e\164", $id_comment); goto enHR6; BCyqP: $this->db->trans_start(); goto N9znC; X2c0Y: } public function hapusBalasan($id_reply) { goto IN8ex; nzttA: $deleted["\142\x61\154\x61\163\141\156"] = $this->db->delete("\x70\157\163\x74\137\x72\145\x70\154\171"); goto s_fVZ; IN8ex: $this->db->trans_start(); goto Csa76; Csa76: $this->db->where("\x69\144\x5f\162\x65\x70\x6c\x79", $id_reply); goto nzttA; s_fVZ: $this->db->trans_complete(); goto rb54Q; rb54Q: $this->output_json($deleted); goto qZdHq; qZdHq: } public function getRunningText() { $data["\x72\165\156\156\x69\x6e\x67\137\x74\145\x78\164"] = $this->dashboard->getRunningText(); $this->output_json($data); } public function saveRunningText() { goto ZydrM; ZydrM: $input = json_decode($this->input->post("\x74\145\170\x74", true)); goto SJLxn; BUCmS: rF9tJ: goto slsQZ; slsQZ: $data["\x73\164\x61\x74\165\163"] = $updates; goto P2Dcl; P2Dcl: $this->output_json($data); goto JCNpQ; B2QfN: foreach ($input as $d) { goto XCNAC; j9lvS: $update = $this->db->replace("\162\x75\156\156\x69\x6e\147\x5f\x74\145\170\x74", $data); goto H6qgJ; foNGm: IcRFh: goto AMiGx; H6qgJ: array_push($updates, $update); goto foNGm; XCNAC: $data = ["\151\x64\x5f\x74\145\170\164" => $d->id_text, "\x74\145\170\164" => $d->text]; goto j9lvS; AMiGx: } goto BUCmS; SJLxn: $updates = []; goto B2QfN; JCNpQ: } public function hapusRunningText($id) { goto xHBlS; yb0fv: $deleted = $this->db->delete("\x72\165\156\x6e\x69\x6e\x67\137\164\145\170\x74"); goto Su0z6; Su0z6: $this->output_json($deleted); goto O7y1Y; xHBlS: $this->db->where("\x69\x64\x5f\164\145\x78\x74", $id); goto yb0fv; O7y1Y: } }