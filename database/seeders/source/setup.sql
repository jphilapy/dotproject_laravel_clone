
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'ProjectStatus','{"0": "Not Defined", "1": "Proposed", "2": "In Planning", "3": "In Progress", "4": "On Hold", "5": "Complete", "6": "Template", "7": "Archived" }');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'CompanyType','{"0": "Not Applicable", "1": "Client", "2": "Vendor", "3": "Supplier", "4": "Consultant", "5": "Government", "6": "Internal" }');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'TaskDurationType', '{"1":"hours", "24":"days"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'EventType', '{"0":"General", "1":"Appointment","2":"Meeting","3":"All Day Event", "4":"Anniversary","5":"Reminder"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'TaskStatus', '{"0":"Active","-1":"Inactive"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'TaskType', '{"0":"Unknown", "1":"Administrative", "2":"Operative"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'ProjectType', '{"0":"Unknown", "1":"Administrative","2":"Operative"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (3, 'ProjectColors', '{"Web":"FFE0AE", "Engineering":"AEFFB2", "HelpDesk":"FFFCAE", "System Administration":"FFAEAE"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'FileType', '{"0":"Unknown", "1":"Document", "2":"Application"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'TaskPriority', '{"-1":"low", "0":"normal", "1":"high"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'ProjectPriority', '{"-1":"low", "0":"normal", "1":"high"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'ProjectPriorityColor', '{"-1":"#E5F7FF", "0":"", "1":"#FFDCB3"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'TaskLogReference', '{"0":"Not Defined", "1":"Email", "2":"Helpdesk", "3":"Phone Call", "4":"Fax"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'TaskLogReferenceImage',
        '{"0":"", "1":"./images/obj/email.gif", "2":"./modules/helpdesk/images/helpdesk.png", "3":"./images/obj/phone.gif", "4":"./images/icons/stock_print-16.png"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'UserType',
        '{"0":"Default User", "1":"Administrator", "2":"CEO", "3":"Director", "4":"Branch Manager", "5":"Manager", "6":"Supervisor", "7":"Employee"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'ProjectRequiredFields',
        '{"f.project_name.value.length":"<3", "f.project_color_identifier.value.length":"<3", "f.project_company.options[f.project_company.selectedIndex].value":"<1"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (2, 'TicketNotify',
        '{"0":"admin@example.com", "1":"admin@example.com", "2":"admin@example.com", "3":"admin@example.com", "4":"admin@example.com"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'TicketPriority', '{"0":"Low", "1":"Normal", "2":"High", "3":"Highest", "4":"911"}');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, 'TicketStatus', '{"0":"Open", "1":"Closed", "2":"Deleted"}');

