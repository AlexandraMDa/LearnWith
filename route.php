<?php
	$route['index'] = "view/Pagini/index.php";
	$route['error'] = "view/Pagini/eroare.php";
	$route['eroare'] = "view/Pagini/eroare.php";

	/* RUTE CATRE VIEW */
		/*Sign up*/
	$route['view_sign_up_general'] = "view/Pagini/view_sign_up_general.php";
	$route['view_sign_elev'] = "view/Pagini/formular_inscrie_elevdb.php";
	$route['view_sign_prof'] = "view/Pagini/formular_inscrie_profdb.php";
	$route['view_sign_parinte'] = "view/Pagini/formular_inscrie_parintedb.php";
		/*Log in*/
	$route['view_log_in_general'] = "view/Pagini/formular_log_in.php";
		/*Panouri generale*/
	$route['view_panou_elev'] = "view/Pagini/view_panou_elev.php";
	$route['view_panou_prof'] = "view/Pagini/view_panou_profesor.php";
	$route['view_panou_parinte'] = "view/Pagini/view_panou_parinte.php";
	$route['view_panou_admin'] = "view/Pagini/view_panou_admin.php";
		/*Panou elev*/
			/*Optiuni generale*/
				/*Edit*/
	$route['view_edit_cont_elev'] = "view/Pagini/formular_edit_cont_elev.php";
				/*Introdu imagine */
	$route['form_send_image_elev'] = "view/Pagini/formular_introdu_img_elev.php";
			/*Orar*/
				/*View pe zile*/
	$route['view_orar_elev'] = "view/Pagini/view_orar_elev.php";
				/*View pe discipline*/
	$route['view_orar_elev_discipline'] = "view/Pagini/view_orar_elev_discipline.php";
			/*Calendar*/
				/*View general*/
	$route['view_calendar_elev'] = "view/Pagini/view_calendar_elev.php";
				/*View pe discipline*/
	$route['view_calendar_elev_discipline'] = "view/Pagini/view_calendar_elev_discipline.php";
			/*Notele - vizualizare ca elev*/
	$route['view_panou_note_elev'] = "view/Pagini/view_panou_note_elev.php";
			/*Notele - vizualizare pe discipline*/
	$route['view_note_elev_discipline'] = "view/Pagini/view_note_elev_discipline.php";
			/*Notele - ordonate*/
				/*Cele mai noi*/
	$route['view_note_elev_noi'] = "view/Pagini/view_note_elev_noi.php";
				/*Cele mai vechi*/
	$route['view_note_elev_vechi'] = "view/Pagini/view_note_elev_vechi.php";
				/*Crescator*/
	$route['view_note_elev_cresc'] = "view/Pagini/view_note_elev_cresc.php";
				/*Descrescator*/
	$route['view_note_elev_descresc'] = "view/Pagini/view_note_elev_descresc.php";
			/*Notele - vizualizare filtrata */
	$route['view_note_filtrate'] = "view/Pagini/view_note_filtrate.php";
			/*Absentele - vizualizare ca elev*/
	$route['view_panou_absente_elev'] = "view/Pagini/view_panou_absente_elev.php";
			/*Absentele - vizualizare pe discipline */
	$route['view_absente_elev_discipline'] = "view/Pagini/view_absente_elev_discipline.php";
			/*Absentele - vizualizare ordonata*/
				/*Cele mai noi*/
	$route['view_absente_elev_noi'] = "view/Pagini/view_absente_elev_noi.php";
				/*Cele mai vechi*/
	$route['view_absente_elev_vechi'] = "view/Pagini/view_absente_elev_vechi.php";
			/*Absente - vizualizare filtrata*/
				/*Motivate*/
	$route['view_absente_elev_motivate'] = "view/Pagini/view_absente_elev_motivate.php";
				/*Nemotivate*/
	$route['view_absente_elev_nemotivate'] = "view/Pagini/view_absente_elev_nemotivate.php";
			/*Cod - vizualizarea de catre elev*/
	$route['view_cod_elev'] =  "view/Pagini/view_cod_elev.php";
			/*Evolutie*/
	$route['view_evolutie_elev']="view/Pagini/view_elev_evolutie.php";
				/*Evolutia rezultatelor de exceptie*/
	$route['view_elev_exceptii'] = "view/Pagini/view_elev_evolutie_exceptii.php";
				/*Evolutia notelor*/
	$route['view_elev_evolutie_note'] = "view/Pagini/view_elev_evolutie_note.php";
					/*Evolutia notelor pe discipline*/
	$route['view_evolutie_elev_discipline'] = "view/Pagini/view_evolutie_elev_discipline.php";
				/*Evolutia absentelor*/
	$route['view_elev_evolutie_absente'] = "view/Pagini/view_elev_evolutie_absente.php";
			/*Materiale-vizualizare*/
	$route['view_panou_materiale'] = "view/Pagini/view_panou_materiale.php";
				/*Singur*/
	$route['view_material_singur'] = "view/Pagini/view_material_singur_elev.php";
				/*Chat*/
	$route['view_chat'] = "controler/json_list_chat.php";
		/*Panou prof*/
			/*Optiuni generale*/
				/*Edit*/
	$route['view_edit_cont_prof'] = "view/Pagini/formular_edit_cont_prof.php";
				/*Introdu imagine */
	$route['form_send_image_prof'] = "view/Pagini/formular_introdu_img_profesor.php";
			/*Orar*/
	$route['view_orar_profesor'] = "view/Pagini/view_orar_profesor.php";
				/*Pe discipline*/
	$route['view_orar_prof_discipline'] = "view/Pagini/view_orar_prof_discipline.php";
			/*Disciplinele*/
	$route['view_discipline_general'] = "view/Pagini/view_panou_discipline_general.php";
				/*Intro*/
	$route['form_intro_disciplina'] = "view/Pagini/formular_intro_discipline.php";
				/*Edit*/
	$route['view_edit_disciplina'] = "view/Pagini/formular_edit_disciplina.php";
				/*Sterge*/
	$route['view_sterge_disciplina'] = "view/Pagini/formular_sterge_disciplina.php";
				/*Vizualizare individuala pe clasa si disciplina*/
	$route['view_panou_clasa'] = "view/Pagini/view_panou_clasa.php";
			/*Clase*/
	$route['view_clase_general'] = "view/Pagini/view_panou_clase_general.php";
				/*Intro*/
	$route['view_adauga_clasa']="view/Pagini/formular_adauga_clasa.php";
				/*Sterge*/
	$route['view_sterge_clasa'] = "view/Pagini/formular_sterge_clasa.php";
				/*View evolutie*/
					/*General*/
	$route['view_evolutii_clase'] = "view/Pagini/view_evolutii_clase.php";
					/*Individual*/
	$route['view_grafic_clasa'] = "view/Pagini/view_grafic_clasa.php";
				/*Adauga note*/
	$route['view_adauga_nota'] = "view/Pagini/formular_adauga_notedb.php";
				/*Sterge note*/
	$route['view_sterge_nota'] = "view/Pagini/view_sterge_nota.php";
				/*Editeaza note*/
	$route['view_edit_nota'] = "view/Pagini/view_edit_nota.php";
				/*Editeaza absenta*/
	$route['view_edit_absenta'] = "view/Pagini/view_edit_absenta.php";
				/*Adauga absenta*/
	$route['view_adauga_absenta'] = "view/Pagini/view_adauga_absenta.php";
				/*Sterge absenta*/
	$route['view_sterge_absenta'] = "view/Pagini/view_sterge_absenta.php";
			/*Vizualizare absente*/
	$route['view_parinte_evolutie_absente'] = "view/Pagini/view_parinte_evolutie_absente.php";
			/*Editeaza absente*/
	$route['edit_absentadb'] = "controler/edit_absentadb.php";
			/*Adauga teste*/
	$route['view_intro_examen'] = "view/Pagini/view_intro_examen.php";
			/*Materiale - vizualizare*/
	$route['view_materiale_general'] = "view/Pagini/view_materiale_general.php";
				/*Adaugare*/
	$route['form_intro_material'] = "view/Pagini/form_intro_material.php";
				/*Gestionare*/
	$route['gestioneaza_materiale'] = "view/Pagini/gestioneaza_materiale.php";
				/*Chat*/
	$route['view_profesor_chat'] = "view/Pagini/view_profesor_chat.php";


		/*Panou parinte*/
			/*Optiuni generale*/
				/*Edit*/
	$route['view_edit_cont_parinte'] = "view/Pagini/formular_edit_cont_parinte.php";
				/*Adauga imagine*/
	$route['form_send_image_parinte'] = "view/Pagini/formular_introdu_img_parinte.php";
				/*Calendar*/
	$route['view_calendar_parinte'] = "view/Pagini/view_calendar_parinte.php";
			/*Selectare copil*/
	$route['view_select_copil'] = "view/Pagini/formular_selecteaza_copil.php";
			/*View situatii copii*/
	$route['view_copii_general'] = "view/Pagini/view_copii_general.php";
				/*Individual*/
	$route['view_copil_singur'] = "view/Pagini/view_copil_singur.php";
				/*Vizualizare note*/
	$route['view_parinte_note'] = "view/Pagini/view_parinte_note.php";
	            /*Vizualizare evolutie note*/
	$route['view_parinte_evolutie_note'] = "view/Pagini/view_parinte_evolutie_note.php";
				/*Vizualizare absente*/
	$route['view_parinte_absente'] = "view/Pagini/view_parinte_absente.php";


	
	/*RUTE CATRE CONTROLER*/

		/*Sign up*/
			/*Elev*/
	$route['introdu_elevdb'] = "controler/execute_introdu_elevdb.php";
			/*Prof*/
	$route['introdu_profdb'] = "controler/execute_introdu_profdb.php";
			/*Parinte*/
	$route['introdu_parintedb'] = "controler/execute_introdu_parintedb.php";
		/*Log in*/
	$route['execute_log_in'] = "controler/execute_log_indb.php";
	$route['delog'] = "controler/execute_delog.php";
		/*Elev*/
			/*Optiuni generale*/
				/*Edit*/
	$route['edit_cont_elev'] = "controler/edit_cont_elev.php";
				/*Introdu poza*/
	$route['introdu_poza_elevdb'] = "controler/execute_intro_poza.php";
				/*Stergere cont*/
	$route['execute_sterge_cont_elev'] = "controler/execute_sterge_cont_elev.php";
		/*Profesor*/
			/*Optiuni generale*/
				/*Edit*/
	$route['edit_cont_prof'] = "controler/edit_cont_prof.php";
				/*Introdu poza*/
	$route['introdu_poza_profdb'] = "controler/execute_intro_poza_prof.php";
			/*Discipline*/
				/*Adauga*/
	$route['introdu_disciplinadb'] = "controler/introdu_disciplinadb.php";
				/*Edit*/
	$route['edit_discipline'] = "controler/editare_discipline.php";
				/*Sterge*/
	$route['execute_sterge_disciplina'] = "controler/sterge_disciplina.php";
			/*Clase*/
				/*Adauga*/
	$route['introdu_clasadb'] = "controler/introdu_clasadb.php";
				/*Edit*/
	$route['edit_clase'] = "controler/edit_clasadb.php";
				/*Stergere*/
	$route['execute_sterge_clasa'] = "controler/execute_sterge_clasa.php";
				/*Note*/
			/*Introdu note si absente*/
	$route['introdu_db'] = "controler/execute_introdu_db.php";
				/*Sterge note*/
	$route['execute_sterge_nota'] = "controler/execute_sterge_nota.php";
				/*Adauga note*/
	$route['execute_adauga_nota'] = "controler/execute_adauga_nota.php";
			/*Adauga absenta*/
	$route['execute_adauga_absenta'] = "controler/execute_adauga_absenta.php";
			/*Editeaza note si absente*/
	$route['edit_notadb'] = "controler/execute_edit_db.php";
			/*Introdu examene*/
	$route['execute_intro_examen'] = "controler/execute_intro_examen.php";
			/*Introdu materiale*/
	$route['execute_intro_material'] = "controler/execute_intro_material.php";
	//$route['execute_intro_lectie'] = "controler/execute_introdu_lectie.php";
			/*Sterge absenta*/
	$route['execute_sterge_absenta'] = "controler/execute_sterge_absenta.php";
		/*Parinte*/
			/*Optiuni generale*/
				/*Edit*/
	$route['edit_cont_parinte'] = "controler/edit_cont_parinte.php";
				/*Adauga imagine*/
	$route['introdu_poza_parintedb'] = "controler/execute_intro_poza_parinte.php";
			/*Selectarea elevului*/
	$route['select_elev'] = "controler/select_elev.php";


	$route['json_list_note_clasa_zi'] = "controler/json_list_note_clasa_zi.php";

	
	function redirect($pagina){
		global $route;
		include $route[$pagina];
	}


	if(!array_key_exists($pagina, $route)) $pagina='index';

	//print_r($elements);
//	echo $pagina;
	//print_r($content_pagina);

	if($pagina=='index' && array_key_exists('id_cont_elev', $_SESSION)) $pagina="view_panou_elev";
	if($pagina=='index' && array_key_exists('id_cont_prof', $_SESSION)) $pagina="view_panou_prof";
	if($pagina=='index' && array_key_exists('id_cont_parinte', $_SESSION)) $pagina="view_panou_parinte";

   // echo $_SESSION['id_cont_elev'];

	include $route[$pagina];
?>
