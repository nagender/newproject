 <?php
 $a='{
  "account": {
    "id": 9,
    "name": "zenia-sysadmin",
    "disabled": false,
    "twofa_enabled": false,
    "twofa_id": null,
    "api_key": "82fa3e2bb08cf21607d7b83ee1fbe588d0755c86",
    "person": {
      "id": 11,
      "title": "Sysadmin",
      "first_name": "Zenia",
      "last_name": "Sysadmin",
      "work_phone": "9999999999",
      "fax": "9999999999",
      "cell_phone": "9999999999",
      "email": "sysadmin@zenia.com"
    },
    "organization": {
      "id": 1,
      "name": "AuditRS",
      "phone": null,
      "fax": null,
      "email": null,
      "account_number": null,
      "rssd_id": null,
      "regulator": null,
      "core_system": null,
      "core_tools": null,
      "peer_group": null,
      "organization_type": {
        "id": 1,
        "name": "service_provider"
      },
      "organization_subtype": {
        "id": 1,
        "name": "NONE"
      }
    }
  }
}';

$json_decode=json_decode($a);
echo"<pre>";print_r($json_decode);echo"</pre>";
 
 ?>