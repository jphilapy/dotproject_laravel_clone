INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, "CompanyType", "0|Not Applicable\n1|Client\n2|Vendor\n3|Supplier\n4|Consultant\n5|Government\n6|Internal");
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, "TaskDurationType", "1|hours\n24|days");


INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (1, "EventType", "0|General\n1|Appointment\n2|Meeting\n3|All Day Event\n4|Anniversary\n5|Reminder");
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'TaskStatus', '0|Active\n-1|Inactive');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'TaskType', '0|Unknown\n1|Administrative\n2|Operative');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'ProjectType', '0|Unknown\n1|Administrative\n2|Operative');
INSERT INTO `sysvals` (`sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (3, "ProjectColors", "Web|FFE0AE\nEngineering|AEFFB2\nHelpDesk|FFFCAE\nSystem Administration|FFAEAE");
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'FileType', '0|Unknown\n1|Document\n2|Application');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'TaskPriority', '-1|low\n0|normal\n1|high');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'ProjectPriority', '-1|low\n0|normal\n1|high');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'ProjectPriorityColor', '-1|#E5F7FF\n0|\n1|#FFDCB3');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'TaskLogReference', '0|Not Defined\n1|Email\n2|Helpdesk\n3|Phone Call\n4|Fax');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'TaskLogReferenceImage',
        '0| 1|./images/obj/email.gif 2|./modules/helpdesk/images/helpdesk.png 3|./images/obj/phone.gif 4|./images/icons/stock_print-16.png');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'UserType',
        '0|Default User\r\n1|Administrator\r\n2|CEO\r\n3|Director\r\n4|Branch Manager\r\n5|Manager\r\n6|Supervisor\r\n7|Employee');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'ProjectRequiredFields',
        'f.project_name.value.length|<3\r\nf.project_color_identifier.value.length|<3\r\nf.project_company.options[f.project_company.selectedIndex].value|<1');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 2, 'TicketNotify',
        '0|admin@example.com\n1|admin@example.com\n2|admin@example.com\r\n3|admin@example.com\r\n4|admin@example.com');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'TicketPriority', '0|Low\n1|Normal\n2|High\n3|Highest\n4|911');
INSERT INTO `sysvals` (`sysval_id`, `sysval_key_id`, `sysval_title`, `sysval_value`)
VALUES (null, 1, 'TicketStatus', '0|Open\n1|Closed\n2|Deleted');
