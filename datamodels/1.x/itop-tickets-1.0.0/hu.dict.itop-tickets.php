<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

/**
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Class:lnkTicketToDoc' => 'Hibajegy / Dokumentum',
	'Class:lnkTicketToDoc+' => '',
	'Class:lnkTicketToDoc/Attribute:ticket_id' => 'Hibajegy',
	'Class:lnkTicketToDoc/Attribute:ticket_id+' => '',
	'Class:lnkTicketToDoc/Attribute:document_id' => 'Dokumentum',
	'Class:lnkTicketToDoc/Attribute:document_id+' => '',
	'Class:lnkTicketToContact' => 'Hibajegy / Kapcsolattartó',
	'Class:lnkTicketToContact+' => '',
	'Class:lnkTicketToContact/Attribute:ticket_id' => 'Hibajegy',
	'Class:lnkTicketToContact/Attribute:ticket_id+' => '',
	'Class:lnkTicketToContact/Attribute:contact_id' => 'Kapcsolattartó',
	'Class:lnkTicketToContact/Attribute:contact_id+' => '',
	'Class:lnkTicketToContact/Attribute:role' => 'Szerepkör',
	'Class:lnkTicketToContact/Attribute:role+' => '',
	'Class:lnkTicketToCI' => 'Hibajegy / CI',
	'Class:lnkTicketToCI+' => '',
	'Class:lnkTicketToCI/Attribute:ticket_id' => 'Hibajegy',
	'Class:lnkTicketToCI/Attribute:ticket_id+' => '',
	'Class:lnkTicketToCI/Attribute:ci_id' => 'CI',
	'Class:lnkTicketToCI/Attribute:ci_id+' => '',
	'Class:lnkTicketToCI/Attribute:impact' => 'Hatás',
	'Class:lnkTicketToCI/Attribute:impact+' => '',
	'Class:Ticket' => 'Hibajegy',
	'Class:Ticket+' => '',
	'Class:Ticket/Attribute:ref' => 'Referencia',
	'Class:Ticket/Attribute:ref+' => '',
	'Class:Ticket/Attribute:title' => 'Cím',
	'Class:Ticket/Attribute:title+' => '',
	'Class:Ticket/Attribute:description' => 'Leírás',
	'Class:Ticket/Attribute:description+' => '',
	'Class:Ticket/Attribute:ticket_log' => 'Log',
	'Class:Ticket/Attribute:ticket_log+' => '',
	'Class:Ticket/Attribute:start_date' => 'Megoldás kezdete',
	'Class:Ticket/Attribute:start_date+' => '',
	'Class:Ticket/Attribute:document_list' => 'Dokumentumok',
	'Class:Ticket/Attribute:document_list+' => '',
	'Class:Ticket/Attribute:ci_list' => 'CI-k',
	'Class:Ticket/Attribute:ci_list+' => '',
	'Class:Ticket/Attribute:contact_list' => 'Kapcsolattartók',
	'Class:Ticket/Attribute:contact_list+' => '',
	'Class:Ticket/Attribute:incident_list' => 'Kapcsolódó incidensek',
	'Class:Ticket/Attribute:incident_list+' => '',
	'Class:Ticket/Attribute:finalclass' => 'Típus',
	'Class:Ticket/Attribute:finalclass+' => '',
	'Ticket:baseinfo' => 'Általános információk',
	'Ticket:date' => 'Dátum',
	'Ticket:contact' => 'Kapcsolattartók',
	'Ticket:moreinfo' => 'Kiegészítő információk',
	'Ticket:relation' => 'Kapcsolatok',
	'Ticket:log' => 'Kommunikáció',
	'Class:lnkTicketToDoc/Attribute:ticket_ref' => 'Hibajegy #',
	'Class:lnkTicketToDoc/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToDoc/Attribute:document_name' => 'Dokumentum',
	'Class:lnkTicketToDoc/Attribute:document_name+' => '',
	'Class:lnkTicketToContact/Attribute:ticket_ref' => 'Hibajegy #',
	'Class:lnkTicketToContact/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToContact/Attribute:contact_name' => 'Kapcsolattartó',
	'Class:lnkTicketToContact/Attribute:contact_name+' => '',
	'Class:lnkTicketToContact/Attribute:contact_email' => 'E-mail',
	'Class:lnkTicketToContact/Attribute:contact_email+' => '',
	'Class:lnkTicketToCI/Attribute:ticket_ref' => 'Hibajegy #',
	'Class:lnkTicketToCI/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToCI/Attribute:ci_name' => 'CI',
	'Class:lnkTicketToCI/Attribute:ci_name+' => '',
	'Class:lnkTicketToCI/Attribute:ci_status' => 'CI státusz',
	'Class:lnkTicketToCI/Attribute:ci_status+' => '',
	'Class:ResponseTicket' => 'Válasz Hibajegy',
	'Class:ResponseTicket+' => '',
	'Class:ResponseTicket/Attribute:status' => 'Státusz',
	'Class:ResponseTicket/Attribute:status+' => '',
	'Class:ResponseTicket/Attribute:status/Value:new' => 'Új',
	'Class:ResponseTicket/Attribute:status/Value:new+' => '',
	'Class:ResponseTicket/Attribute:status/Value:escalated_tto' => 'Eszkaláció/TTO',
	'Class:ResponseTicket/Attribute:status/Value:escalated_tto+' => '',
	'Class:ResponseTicket/Attribute:status/Value:assigned' => 'Kiosztott',
	'Class:ResponseTicket/Attribute:status/Value:assigned+' => '',
	'Class:ResponseTicket/Attribute:status/Value:escalated_ttr' => 'Eszkaláció/TTR',
	'Class:ResponseTicket/Attribute:status/Value:escalated_ttr+' => '',
	'Class:ResponseTicket/Attribute:status/Value:frozen' => 'Függő',
	'Class:ResponseTicket/Attribute:status/Value:frozen+' => '',
	'Class:ResponseTicket/Attribute:status/Value:resolved' => 'Megoldott',
	'Class:ResponseTicket/Attribute:status/Value:resolved+' => '',
	'Class:ResponseTicket/Attribute:status/Value:closed' => 'Lezárt',
	'Class:ResponseTicket/Attribute:status/Value:closed+' => '',
	'Class:ResponseTicket/Attribute:caller_id' => 'Hívó',
	'Class:ResponseTicket/Attribute:caller_id+' => '',
	'Class:ResponseTicket/Attribute:caller_email' => 'E-mail',
	'Class:ResponseTicket/Attribute:caller_email+' => '',
	'Class:ResponseTicket/Attribute:org_id' => 'Ügyfél',
	'Class:ResponseTicket/Attribute:org_id+' => '',
	'Class:ResponseTicket/Attribute:org_name' => 'Ügyfél',
	'Class:ResponseTicket/Attribute:org_name+' => '',
	'Class:ResponseTicket/Attribute:service_id' => 'Szolgáltatás',
	'Class:ResponseTicket/Attribute:service_id+' => '',
	'Class:ResponseTicket/Attribute:service_name' => 'Neve',
	'Class:ResponseTicket/Attribute:service_name+' => '',
	'Class:ResponseTicket/Attribute:servicesubcategory_id' => 'Szolgáltatás elem',
	'Class:ResponseTicket/Attribute:servicesubcategory_id+' => '',
	'Class:ResponseTicket/Attribute:servicesubcategory_name' => 'Neve',
	'Class:ResponseTicket/Attribute:servicesubcategory_name+' => '',
	'Class:ResponseTicket/Attribute:product' => 'Termék',
	'Class:ResponseTicket/Attribute:product+' => '',
	'Class:ResponseTicket/Attribute:impact' => 'Hatás',
	'Class:ResponseTicket/Attribute:impact+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:1' => 'A szervezeti egységre',
	'Class:ResponseTicket/Attribute:impact/Value:1+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:2' => 'A szolgáltatásra',
	'Class:ResponseTicket/Attribute:impact/Value:2+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:3' => 'A személyre',
	'Class:ResponseTicket/Attribute:impact/Value:3+' => '',
	'Class:ResponseTicket/Attribute:urgency' => 'Fontosság',
	'Class:ResponseTicket/Attribute:urgency+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:1' => 'Nagyon fontos',
	'Class:ResponseTicket/Attribute:urgency/Value:1+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:2' => 'Fontos',
	'Class:ResponseTicket/Attribute:urgency/Value:2+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:3' => 'Nem fontos',
	'Class:ResponseTicket/Attribute:urgency/Value:3+' => '',
	'Class:ResponseTicket/Attribute:priority' => 'Prioritás',
	'Class:ResponseTicket/Attribute:priority+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:1' => 'Magas',
	'Class:ResponseTicket/Attribute:priority/Value:1+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:2' => 'Közepes',
	'Class:ResponseTicket/Attribute:priority/Value:2+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:3' => 'Alacsony',
	'Class:ResponseTicket/Attribute:priority/Value:3+' => '',
	'Class:ResponseTicket/Attribute:workgroup_id' => 'Munkacsoport',
	'Class:ResponseTicket/Attribute:workgroup_id+' => '',
	'Class:ResponseTicket/Attribute:workgroup_name' => 'Munkacsoport',
	'Class:ResponseTicket/Attribute:workgroup_name+' => '',
	'Class:ResponseTicket/Attribute:agent_id' => 'Felelős',
	'Class:ResponseTicket/Attribute:agent_id+' => '',
	'Class:ResponseTicket/Attribute:agent_name' => 'Felelős neve',
	'Class:ResponseTicket/Attribute:agent_name+' => '',
	'Class:ResponseTicket/Attribute:agent_email' => 'Felelős e-mail',
	'Class:ResponseTicket/Attribute:agent_email+' => '',
	'Class:ResponseTicket/Attribute:related_problem_id' => 'Kapcsolódó probléma',
	'Class:ResponseTicket/Attribute:related_problem_id+' => '',
	'Class:ResponseTicket/Attribute:related_problem_ref' => 'Referencia',
	'Class:ResponseTicket/Attribute:related_problem_ref+' => '',
	'Class:ResponseTicket/Attribute:related_change_id' => 'Kapcsolódó változás',
	'Class:ResponseTicket/Attribute:related_change_id+' => '',
	'Class:ResponseTicket/Attribute:related_change_ref' => 'Referencia',
	'Class:ResponseTicket/Attribute:related_change_ref+' => '',
	'Class:ResponseTicket/Attribute:close_date' => 'Lezárt',
	'Class:ResponseTicket/Attribute:close_date+' => '',
	'Class:ResponseTicket/Attribute:last_update' => 'Utolsó frissítés',
	'Class:ResponseTicket/Attribute:last_update+' => '',
	'Class:ResponseTicket/Attribute:assignment_date' => 'Kiosztás dátuma',
	'Class:ResponseTicket/Attribute:assignment_date+' => '',
	'Class:ResponseTicket/Attribute:resolution_date' => 'Megoldás dátuma',
	'Class:ResponseTicket/Attribute:resolution_date+' => '',
	'Class:ResponseTicket/Attribute:tto_escalation_deadline' => 'TTO eszkaláció határideje',
	'Class:ResponseTicket/Attribute:tto_escalation_deadline+' => '',
	'Class:ResponseTicket/Attribute:ttr_escalation_deadline' => 'TTR eszkaláció határideje',
	'Class:ResponseTicket/Attribute:ttr_escalation_deadline+' => '',
	'Class:ResponseTicket/Attribute:closure_deadline' => 'Lezárás határideje',
	'Class:ResponseTicket/Attribute:closure_deadline+' => '',
	'Class:ResponseTicket/Attribute:resolution_code' => 'Megoldás módja',
	'Class:ResponseTicket/Attribute:resolution_code+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:couldnotreproduce' => 'Nem reprodukálható',
	'Class:ResponseTicket/Attribute:resolution_code/Value:couldnotreproduce+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:duplicate' => 'Duplikált hibajegy',
	'Class:ResponseTicket/Attribute:resolution_code/Value:duplicate+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:fixed' => 'Megoldott',
	'Class:ResponseTicket/Attribute:resolution_code/Value:fixed+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:irrelevant' => 'Nem érdekes',
	'Class:ResponseTicket/Attribute:resolution_code/Value:irrelevant+' => '',
	'Class:ResponseTicket/Attribute:solution' => 'Megoldás',
	'Class:ResponseTicket/Attribute:solution+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction' => 'Felhasználói elégedettség',
	'Class:ResponseTicket/Attribute:user_satisfaction+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:1' => 'Nagyon elégedett',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:1+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:2' => 'Elégedett',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:2+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:3' => 'Elégedetlen',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:3+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:4' => 'Nagyon elégedetlen',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:4+' => '',
	'Class:ResponseTicket/Attribute:user_commment' => 'Felhasználó megjegyzése',
	'Class:ResponseTicket/Attribute:user_commment+' => '',
	'Class:ResponseTicket/Stimulus:ev_assign' => 'Kiosztás',
	'Class:ResponseTicket/Stimulus:ev_assign+' => '',
	'Class:ResponseTicket/Stimulus:ev_reassign' => 'Újraosztás',
	'Class:ResponseTicket/Stimulus:ev_reassign+' => '',
	'Class:ResponseTicket/Stimulus:ev_timeout' => 'Eszkaláció',
	'Class:ResponseTicket/Stimulus:ev_timeout+' => '',
	'Class:ResponseTicket/Stimulus:ev_resolve' => 'Megoldottra jelölve',
	'Class:ResponseTicket/Stimulus:ev_resolve+' => '',
	'Class:ResponseTicket/Stimulus:ev_close' => 'Lezárás',
	'Class:ResponseTicket/Stimulus:ev_close+' => '',
));
?>