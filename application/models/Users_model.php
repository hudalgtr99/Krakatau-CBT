<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\x53\x45\120\101\124\110") or exit("\x4e\157\40\x64\x69\x72\145\143\164\x20\163\143\x72\151\x70\x74\x20\x61\143\x63\x65\163\163\x20\x61\x6c\154\157\x77\145\144"); class Users_model extends CI_Model { public function getDatausers($id = null) { goto wTzBq; GJ9OV: $this->datatables->join("\165\x73\x65\x72\x73", "\165\163\145\x72\x73\x5f\147\x72\157\165\x70\x73\56\x75\x73\145\x72\x5f\151\144\x3d\165\163\145\x72\x73\56\151\x64"); goto wVBpe; Id4sT: $this->datatables->where("\x75\x73\145\162\x73\56\151\144\x20\41\75", $id); goto c_95N; mBsr2: $this->datatables->from("\x75\163\145\162\x73\x5f\147\162\157\x75\160\x73"); goto GJ9OV; kbjRj: $this->datatables->select("\x75\163\145\x72\163\x2e\x69\x64\54\40\165\163\x65\x72\x6e\141\155\145\54\40\x66\151\x72\163\x74\137\156\141\155\x65\54\x20\x6c\x61\163\164\137\x6e\x61\x6d\145\54\x20\x65\155\x61\151\154\54\x20\106\122\x4f\x4d\x5f\125\x4e\x49\130\124\x49\115\105\x28\x63\x72\x65\141\164\x65\144\x5f\157\156\51\x20\141\163\x20\143\x72\145\x61\x74\145\x64\137\x6f\x6e\x2c\40\x6c\x61\163\x74\137\x6c\x6f\147\x69\x6e\54\40\141\x63\x74\151\x76\145\x2c\x20\147\162\157\x75\x70\x73\x2e\x6e\x61\155\x65\40\141\x73\x20\154\x65\166\x65\154"); goto mBsr2; wTzBq: $this->db->query("\x53\105\x54\40\x53\121\114\137\x42\111\107\x5f\x53\x45\x4c\x45\103\x54\x53\75\x31"); goto kbjRj; BejRq: if (!($id !== null)) { goto QSLGr; } goto Id4sT; wVBpe: $this->datatables->join("\147\x72\x6f\165\160\x73", "\165\163\145\162\x73\137\x67\162\x6f\x75\x70\163\x2e\x67\162\157\x75\x70\x5f\151\144\x3d\x67\162\x6f\x75\160\163\x2e\151\x64"); goto BejRq; kmmwL: return $this->datatables->generate(); goto VL37h; c_95N: QSLGr: goto kmmwL; VL37h: } public function getLevelGuru() { $query = $this->db->get("\x6c\145\166\145\x6c\x5f\x67\165\x72\x75")->result(); return $query; } public function getDataadmin() { goto v2o0b; v2o0b: $this->db->query("\x53\105\x54\40\x53\121\114\137\102\x49\x47\137\x53\105\114\x45\103\124\x53\75\61"); goto e3L0S; dbYJ1: $this->datatables->from("\165\x73\x65\x72\163\137\x67\162\x6f\x75\160\x73"); goto PuhDt; q8z6B: return $this->datatables->generate(); goto rLe0V; e3L0S: $this->datatables->select("\165\x73\145\x72\163\x2e\x69\144\54\40\165\163\145\x72\156\141\155\x65\x2c\40\x66\x69\162\163\x74\137\156\141\x6d\x65\x2c\40\x6c\x61\163\x74\x5f\x6e\x61\155\145\x2c\x20\x65\155\x61\151\154\54\40\106\x52\117\115\137\x55\x4e\111\130\124\x49\x4d\105\x28\x63\x72\145\x61\x74\x65\x64\x5f\x6f\156\x29\40\x61\163\x20\143\162\145\x61\164\145\144\137\157\156\x2c\40\x6c\141\163\164\x5f\154\157\147\151\x6e\x2c\x20\141\x63\x74\151\166\x65\54\40\x67\x72\157\x75\160\x73\56\x6e\141\x6d\145\40\x61\163\x20\154\145\x76\x65\154"); goto dbYJ1; PuhDt: $this->datatables->join("\165\x73\145\x72\163", "\x75\163\145\x72\163\x5f\x67\162\157\165\x70\163\56\165\163\145\x72\137\x69\144\75\x75\x73\145\x72\163\x2e\151\144"); goto ENh8x; ENh8x: $this->datatables->join("\147\x72\157\165\x70\163", "\165\x73\145\162\163\x5f\147\x72\157\x75\x70\x73\x2e\x67\162\157\165\160\x5f\151\144\x3d\x67\x72\x6f\165\160\x73\56\x69\x64"); goto KYqVt; KYqVt: $this->datatables->where("\x67\162\157\165\160\137\x69\144\40\75", 1); goto q8z6B; rLe0V: } public function getUserGuru($tp, $smt) { goto MLBt3; nKvLa: $this->datatables->join("\165\x73\145\x72\x73\x20\x65", "\x61\56\x75\163\145\162\x6e\141\x6d\x65\75\x65\x2e\165\x73\145\162\156\x61\x6d\145", "\154\x65\x66\164"); goto IhC8t; pOZte: $this->datatables->from("\x6d\x61\163\164\x65\x72\137\147\165\x72\165\40\x61"); goto Vt7rx; IhC8t: return $this->datatables->generate(); goto ol9DN; MLBt3: $this->db->query("\123\x45\124\40\123\121\x4c\x5f\102\x49\107\x5f\x53\105\x4c\x45\103\124\x53\x3d\61"); goto BaLHG; Vt7rx: $this->datatables->join("\152\x61\142\x61\x74\x61\156\137\147\165\x72\x75\40\142", "\x61\56\151\144\137\x67\165\162\x75\75\142\x2e\151\x64\x5f\147\165\x72\x75\40\101\116\x44\x20\142\x2e\151\144\x5f\x74\160\x3d" . $tp . "\x20\x41\116\104\x20\x62\x2e\x69\x64\137\163\x6d\x74\x3d" . $smt . '', "\154\145\x66\164"); goto jihjs; jihjs: $this->datatables->join("\154\x65\x76\145\154\x5f\x67\x75\x72\165\40\143", "\x62\x2e\x69\x64\137\x6a\141\x62\x61\164\x61\x6e\x3d\x63\x2e\151\144\137\154\145\x76\x65\x6c", "\x6c\x65\x66\164"); goto nKvLa; BaLHG: $this->datatables->select("\x61\56\151\144\x5f\x67\165\x72\x75\54\40\141\x2e\x6e\x61\x6d\x61\x5f\147\165\x72\165\54\40\x61\x2e\x75\163\x65\162\156\141\x6d\x65\54\x20\141\56\x70\x61\x73\163\x77\x6f\x72\144\54\40\x63\x2e\154\145\x76\145\x6c\x2c\x20\145\x2e\x69\144\54\x20\x28\123\x45\x4c\105\103\124\x20\x43\x4f\x55\x4e\x54\50\x69\x64\x29\40\106\122\x4f\x4d\40\165\163\x65\x72\x73\x20\127\110\x45\x52\x45\40\145\56\165\x73\145\x72\156\x61\155\x65\40\75\x20\x61\56\165\163\145\x72\x6e\141\x6d\145\51\40\101\123\40\141\153\x74\x69\146"); goto pOZte; ol9DN: } public function getDataGuru($id) { goto tZ389; WfFqG: $this->db->from("\155\141\163\x74\x65\162\137\x67\165\x72\165"); goto n3vvH; tZ389: $this->db->select("\52"); goto WfFqG; n3vvH: $this->db->where("\151\x64\137\147\165\162\x75", $id); goto TCND0; TCND0: $query = $this->db->get()->row(); goto Mmr0j; Mmr0j: return $query; goto wrNii; wrNii: } public function getDetailGuru($id) { goto imeK4; imeK4: $this->db->query("\x53\105\124\40\x53\121\114\x5f\x42\111\x47\x5f\x53\x45\x4c\105\103\124\x53\75\61"); goto QfILO; sl4UU: $this->db->join("\165\163\145\162\x73\40\x65", "\141\x2e\165\x73\x65\x72\x6e\141\x6d\145\x3d\x65\56\165\163\x65\x72\156\x61\x6d\145", "\x6c\x65\146\x74"); goto pa41k; RE1u4: $this->db->join("\154\x65\x76\x65\x6c\137\x67\165\162\165\x20\x63", "\142\x2e\151\144\x5f\152\141\142\141\x74\141\156\75\x63\56\x69\144\x5f\154\145\166\x65\x6c", "\x6c\x65\x66\x74"); goto sl4UU; kUC7y: $this->db->join("\x6a\141\x62\x61\164\x61\x6e\137\x67\x75\x72\165\40\142", "\141\56\151\x64\x5f\147\165\162\x75\x3d\142\x2e\151\x64\x5f\x67\165\162\165", "\x6c\145\146\164"); goto RE1u4; pa41k: $this->db->where("\x61\56\x69\144\x5f\x67\x75\x72\x75", $id); goto glc2Z; glc2Z: $query = $this->db->get()->row(); goto g_2JZ; MvL7V: $this->db->from("\x6d\x61\x73\x74\x65\x72\x5f\x67\x75\x72\165\x20\x61"); goto kUC7y; g_2JZ: return $query; goto cIkD7; QfILO: $this->db->select("\x61\56\151\x64\x5f\x67\165\x72\165\54\x20\141\x2e\x6e\x61\x6d\141\137\147\x75\162\x75\54\40\141\x2e\165\x73\145\162\156\x61\x6d\x65\54\x20\x61\x2e\160\141\163\163\x77\x6f\162\144\x2c\40\x61\56\145\155\x61\x69\x6c\x2c\x20\x63\x2e\154\x65\x76\145\154\54\40\x65\56\151\144\x2c\x20\x28\123\x45\x4c\x45\x43\124\40\103\x4f\125\116\124\50\151\144\x29\x20\x46\122\117\x4d\40\165\x73\x65\162\x73\40\x57\x48\105\122\105\40\x65\x2e\x75\x73\145\x72\156\141\x6d\x65\x20\x3d\40\141\56\x75\x73\145\x72\156\141\155\145\x29\40\x41\x53\40\x61\153\x74\x69\x66"); goto MvL7V; cIkD7: } public function getGuruByUsername($username) { goto iZbRB; k00Gl: $query = $this->db->get("\x6d\141\x73\164\145\162\x5f\147\165\162\165")->row(); goto CHAr8; iZbRB: $this->db->where("\x75\163\145\162\156\x61\x6d\x65", $username); goto k00Gl; CHAr8: return $query; goto mESF_; mESF_: } public function getSiswaByUsername($username) { goto zAQiW; RFpZd: $query = $this->db->get("\x6d\x61\x73\164\145\162\x5f\163\x69\x73\x77\141")->row(); goto pPAGL; pPAGL: return $query; goto iRV30; zAQiW: $this->db->where("\x75\x73\145\x72\x6e\x61\155\145", $username); goto RFpZd; iRV30: } public function getUsers($username) { goto Shnbk; Shnbk: $this->db->where("\165\163\145\162\156\141\x6d\145", $username); goto ynGgs; aCTAF: return $query; goto k4BlP; ynGgs: $query = $this->db->get("\165\x73\x65\162\163")->row(); goto aCTAF; k4BlP: } public function getGroupSiswa() { goto YZ2Zz; rhbwe: $this->db->where("\x67\x72\x6f\x75\x70\x5f\x69\x64", 3); goto Csnmp; YZ2Zz: $this->db->select("\52"); goto eJqsT; Csnmp: $query = $this->db->get()->result(); goto VgMxC; VgMxC: return $query; goto rJrnP; saFfL: $this->db->join("\165\x73\145\162\163\x20\x62", "\141\x2e\x75\x73\145\162\137\151\x64\75\x62\x2e\x69\x64", "\x6c\x65\x66\164"); goto rhbwe; eJqsT: $this->db->from("\165\x73\145\x72\x73\137\147\x72\157\165\x70\x73\40\x61"); goto saFfL; rJrnP: } public function getKelas($tp, $smt) { goto cb_ae; vTvRx: $query = $this->db->get("\x6d\x61\163\164\145\162\137\x6b\145\x6c\141\163")->result(); goto rV9Wv; rV9Wv: return $query; goto IeBTw; cb_ae: $this->db->where("\151\144\137\164\x70", $tp); goto GPf7P; GPf7P: $this->db->where("\151\x64\137\x73\x6d\164", $smt); goto vTvRx; IeBTw: } public function getMapel() { $query = $this->db->get("\155\x61\x73\x74\145\x72\x5f\x6d\x61\x70\145\154")->result(); return $query; } public function getUserSiswaPage($id_tp, $id_smt, $offset, $limit, $search = null, $sort = null, $order = null) { goto cDBgz; yaK0M: $this->db->or_like("\141\x2e\x6e\x69\163", $search); goto hPCW6; cDBgz: $this->db->select("\x61\56\x69\x64\137\x73\x69\163\x77\141\54\x20\x61\56\156\x69\x73\x2c\x20\x61\56\146\157\164\x6f\x2c\x20\141\x2e\x6e\x61\x6d\x61\54\40\141\x2e\165\163\x65\162\156\x61\155\x65\54\x20\x61\x2e\160\x61\163\x73\x77\x6f\x72\144\54\x20\x64\56\x69\144\x5f\x6b\x65\x6c\x61\x73\x2c\40" . "\146\x2e\156\141\x6d\141\x5f\153\x65\x6c\141\x73\54\40\50\x53\105\114\x45\x43\x54\x20\x43\x4f\125\x4e\124\x28\151\x64\x29\40\106\x52\117\115\x20\x75\163\x65\162\x73\x20\127\110\x45\122\x45\40\165\163\x65\x72\x73\56\x75\163\x65\162\x6e\141\155\145\x20\x3d\x20\x61\56\165\163\x65\162\x6e\x61\155\x65\x29\40\x41\123\40\x61\x6b\x74\x69\146"); goto h7vOo; NkHpJ: $this->db->order_by("\x66\56\x6e\x61\155\141\137\x6b\x65\154\x61\163", "\x41\x53\x43"); goto iwhTl; c3t68: $this->db->like("\141\x2e\x6e\141\155\141", $search); goto yaK0M; iH43C: if (!($search != null)) { goto b4BFF; } goto c3t68; hPCW6: $this->db->or_like("\141\x2e\156\151\163\x6e", $search); goto wO01s; dNiui: $this->db->limit($limit, $offset); goto l5d08; h7vOo: $this->db->from("\x6d\141\x73\164\x65\162\x5f\x73\151\x73\x77\x61\40\141"); goto dNiui; SMf0l: $this->db->join("\155\x61\x73\x74\x65\x72\x5f\x6b\x65\x6c\141\163\x20\x66", "\146\x2e\x69\144\x5f\x6b\x65\x6c\141\163\x3d\144\x2e\x69\x64\137\x6b\x65\154\x61\163", "\x6c\145\146\x74"); goto z73vp; iwhTl: $this->db->order_by("\x61\x2e\x6e\141\155\x61", "\101\x53\103"); goto iH43C; z73vp: $this->db->order_by("\111\x53\116\125\x4c\114\50\146\56\x6c\145\166\145\154\x5f\151\144\51\54\x20\146\x2e\x6c\x65\x76\145\154\x5f\x69\144\40\x41\x53\x43"); goto NkHpJ; wO01s: b4BFF: goto eXHbD; l5d08: $this->db->join("\x6b\x65\x6c\x61\x73\137\x73\x69\163\167\x61\40\144", "\x64\x2e\x69\x64\x5f\163\151\163\167\141\75\141\56\x69\x64\x5f\163\151\163\x77\x61\40\x41\116\104\x20\x64\x2e\x69\x64\137\164\x70\x20\75\40" . $id_tp . "\x20\101\116\104\40\x64\56\x69\144\x5f\x73\155\164\40\75\40" . $id_smt . '', "\x6c\x65\x66\x74"); goto SMf0l; eXHbD: return $this->db->get()->result(); goto Rvt91; Rvt91: } public function getUserSiswaTotalPage($search = null) { goto JDH4T; b7AX_: $this->db->or_like("\156\151\x73\x6e", $search); goto TMDqL; JDH4T: $this->db->select("\151\x64\x5f\163\151\x73\x77\141"); goto LdFfe; LaF7v: $this->db->like("\x6e\141\155\x61", $search); goto BwJpR; LdFfe: $this->db->from("\x6d\141\163\x74\145\x72\x5f\x73\151\x73\x77\141"); goto yMukl; TMDqL: GYa4V: goto ujteA; ujteA: return $this->db->get()->num_rows(); goto NM_vD; BwJpR: $this->db->or_like("\x6e\x69\163", $search); goto b7AX_; yMukl: if (!($search != null)) { goto GYa4V; } goto LaF7v; NM_vD: } public function getUserSiswa($tp, $smt) { goto cQ_0o; YGWCC: $this->datatables->join("\x75\163\x65\162\163\40\144", "\x64\56\x75\x73\x65\162\156\x61\155\x65\75\x61\56\165\163\145\x72\156\141\155\x65", "\154\x65\146\x74"); goto KgVvM; cQ_0o: $this->db->query("\x53\x45\x54\40\x53\121\x4c\x5f\102\111\x47\137\x53\105\x4c\x45\x43\124\123\75\61"); goto EBl56; jeqxi: $this->datatables->join("\155\141\x73\x74\x65\x72\137\x6b\145\x6c\x61\163\40\x63", "\x63\56\x69\144\x5f\153\145\x6c\x61\x73\x3d\142\x2e\x69\144\137\x6b\145\x6c\141\x73", "\x6c\145\x66\x74"); goto YGWCC; bDH2w: $this->datatables->from("\x6d\x61\163\x74\x65\162\137\x73\151\x73\167\x61\40\x61"); goto ZsLuz; KgVvM: return $this->datatables->generate(); goto d3_CY; ZsLuz: $this->datatables->join("\153\x65\154\x61\163\x5f\x73\x69\163\x77\x61\40\142", "\142\56\151\144\137\163\151\x73\167\141\x3d\141\56\151\x64\x5f\x73\x69\x73\x77\141\x20\101\x4e\104\x20\142\56\x69\144\137\x74\160\75" . $tp . "\x20\x41\116\x44\40\x62\x2e\x69\x64\x5f\x73\155\x74\75" . $smt . '', "\x6c\145\x66\164"); goto jeqxi; EBl56: $this->datatables->select("\141\x2e\151\x64\137\x73\x69\x73\x77\141\x2c\x20\x61\56\x6e\x69\x73\x2c\x2e\x61\56\x6e\141\x6d\x61\54\40\141\x2e\165\163\x65\x72\156\141\x6d\x65\54\x20\x61\x2e\160\x61\x73\x73\x77\x6f\x72\144\54\40\143\x2e\x6e\x61\155\x61\x5f\153\145\x6c\141\x73\x2c\40\x64\x2e\x69\144\x2c\40\50\x53\105\x4c\105\103\124\x20\x43\117\125\116\x54\50\x69\x64\51\40\x46\x52\x4f\115\40\x75\x73\x65\x72\163\x20\x57\x48\105\x52\105\40\x64\56\x75\163\145\x72\x6e\x61\x6d\x65\x20\75\40\141\x2e\165\163\x65\162\156\x61\155\145\x29\x20\101\x53\x20\141\x6b\164\x69\146"); goto bDH2w; d3_CY: } public function getDataSiswa($id) { goto qXl33; qXl33: $this->db->select("\x6e\x69\x73\x2c\x20\x6e\151\163\x6e\x2c\40\156\141\155\x61\x2c\40\165\x73\145\x72\x6e\141\155\x65\54\x20\x70\x61\x73\x73\167\157\162\x64"); goto oma_O; foLmg: $this->db->where("\151\144\x5f\x73\151\x73\x77\141", $id); goto Jiv3F; Jiv3F: $query = $this->db->get()->row(); goto OuxCH; oma_O: $this->db->from("\x6d\x61\x73\164\145\x72\137\163\x69\x73\x77\x61"); goto foLmg; OuxCH: return $query; goto l0Adf; l0Adf: } public function getSiswaAktif() { goto t_RDS; t_RDS: $this->db->select("\x61\x2e\151\144\x5f\x73\x69\x73\x77\x61\x2c\x20\141\x2e\156\151\163\x2c\40\x61\56\156\x69\x73\x6e\54\40\x61\x2e\x75\x73\x65\x72\x6e\x61\155\145\54\40\x61\56\160\x61\163\x73\x77\157\162\x64\x2c\x20\x61\x2e\156\x61\155\x61\54\x20\x63\x2e\x69\x64\x2c\40\x28\x53\x45\114\x45\x43\x54\40\x43\x4f\x55\116\x54\x28\x69\144\51\40\x46\122\117\115\40\x75\163\x65\162\163\40\127\x48\105\x52\x45\x20\165\x73\x65\162\163\x2e\x75\163\145\162\x6e\x61\155\x65\x20\x3d\x20\x61\x2e\165\x73\145\162\x6e\141\155\145\51\x20\101\x53\x20\141\x6b\x74\x69\146"); goto G59qx; eUeI4: return $this->db->get("\x6d\141\163\164\x65\x72\137\x73\151\x73\x77\x61\40\x61")->result(); goto wSuph; G59qx: $this->db->join("\165\x73\145\162\x73\x20\x63", "\141\56\165\163\x65\162\156\x61\155\145\75\143\56\x75\x73\x65\162\x6e\x61\155\145", "\x6c\x65\x66\164"); goto eUeI4; wSuph: } public function getGuruAktif() { goto DQt_J; wfY0E: return $this->db->get("\x6d\x61\163\x74\145\x72\137\x67\165\x72\x75\40\141")->result(); goto kaYty; DQt_J: $this->db->select("\x61\x2e\151\x64\x5f\147\165\162\165\x2c\x20\143\x2e\151\x64\x2c\x20\x28\123\105\x4c\105\x43\x54\40\x43\x4f\125\116\124\50\x69\144\x29\40\x46\x52\117\x4d\40\x75\163\145\x72\163\x20\127\x48\105\x52\105\x20\x75\x73\145\162\163\x2e\165\163\145\162\156\x61\x6d\x65\x20\x3d\x20\x61\56\x75\x73\x65\162\x6e\141\x6d\145\51\x20\x41\x53\x20\x61\153\164\151\x66"); goto Emp61; Emp61: $this->db->join("\x75\163\x65\162\163\x20\x63", "\x61\56\x75\163\x65\162\x6e\141\155\145\75\143\56\x75\x73\145\x72\x6e\x61\155\x65", "\154\x65\146\x74"); goto wfY0E; kaYty: } }