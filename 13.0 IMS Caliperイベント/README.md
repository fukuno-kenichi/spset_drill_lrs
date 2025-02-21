MongoDBに格納されたIMS Caliperイベントについて，データの一部を掲載する．

{  
&nbsp;&nbsp;"_id": {  
&nbsp;&nbsp;&nbsp;&nbsp;"$oid": "67712bd134ce5017ca930044"  
&nbsp;&nbsp;},  
&nbsp;&nbsp;"userId": "8",　※ユーザーID  
&nbsp;&nbsp;"classId": "4",　※コースID  
&nbsp;&nbsp;"organizationId": "90c9be73-0428-4b16-aacc-6049c5c10ea8",  
&nbsp;&nbsp;"tenantId": "66c41827f2ace639ac90b666",  
&nbsp;&nbsp;"event": {  
&nbsp;&nbsp;&nbsp;&nbsp;"_id": "c965e79077b14e6ba02263895abbe85f",  
&nbsp;&nbsp;&nbsp;&nbsp;"context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",  
&nbsp;&nbsp;&nbsp;&nbsp;"type": "http://purl.imsglobal.org/caliper/v1/AssessmentEvent",  
&nbsp;&nbsp;&nbsp;&nbsp;"agent": {  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"_id": "https://gsis-fukuno.net/mdl_itpass/user/8",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"type": "http://purl.imsglobal.org/caliper/v1/lis/Person",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"name": "No.3 協力者",　※学習者名  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"extensions": {}  
&nbsp;&nbsp;&nbsp;&nbsp;},  
&nbsp;&nbsp;&nbsp;&nbsp;"action": "http://purl.imsglobal.org/vocab/caliper/v1/action#Submitted",　※アクション  
&nbsp;&nbsp;&nbsp;&nbsp;"object": {  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"_id": "https://gsis-fukuno.net/mdl_itpass/mod/quiz/attempt.php?attempt=97",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"type": "http://purl.imsglobal.org/caliper/v1/Attempt",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"extensions": {},  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"assignable": "https://gsis-fukuno.net/mdl_itpass/mod/quiz/view.php?id=99",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"actor": "https://gsis-fukuno.net/mdl_itpass/user/8"  
&nbsp;&nbsp;&nbsp;&nbsp;},  
&nbsp;&nbsp;&nbsp;&nbsp;"target": {  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"_id": "https://gsis-fukuno.net/mdl_itpass/mod/quiz/view.php?id=99",　※タスク（クイズ）ID  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"type": "http://purl.imsglobal.org/caliper/v1/Assessment",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"name": "Q10.ソフトウェア",　※タスク（クイズ）名  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"description": "",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"extensions": {},  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"objectType": [],  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"alignedLearningObjective": [],  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"keywords": []  
&nbsp;&nbsp;&nbsp;&nbsp;},  
&nbsp;&nbsp;&nbsp;&nbsp;"edApp": {  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"_id": "https://gsis-fukuno.net/mdl_itpass",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"type": "http://purl.imsglobal.org/caliper/v1/SoftwareApplication",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"name": "mdl_itpass site",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"description": "A Moodle course",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"extensions": {}  
&nbsp;&nbsp;&nbsp;&nbsp;},  
&nbsp;&nbsp;&nbsp;&nbsp;"group": {  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"_id": "https://gsis-fukuno.net/mdl_itpass/course/4",　※コースID  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"type": "http://purl.imsglobal.org/caliper/v1/lis/CourseSection",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"name": "ITパスポート短期学習講座",　※コース名  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"description": "<p>IPパスポートに出題される内容を学習します．</p>",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"extensions": {},  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"courseNumber": ""  
&nbsp;&nbsp;&nbsp;&nbsp;},  
&nbsp;&nbsp;&nbsp;&nbsp;"membership": {  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"_id": "https://gsis-fukuno.net/mdl_itpass/course/4/user/8",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"type": "http://purl.imsglobal.org/caliper/v1/lis/Membership",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"extensions": {},  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"member": "https://gsis-fukuno.net/mdl_itpass/user/8",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"organization": "https://gsis-fukuno.net/mdl_itpass/course/4",  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"roles": [　※メンバー属性  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "http://purl.imsglobal.org/vocab/lis/v2/membership#Learner"  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"status": "http://purl.imsglobal.org/vocab/lis/v2/status#Active"  
&nbsp;&nbsp;&nbsp;&nbsp;},  
&nbsp;&nbsp;&nbsp;&nbsp;"eventTime": {　※イベント時間  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"$date": "2024-12-29T11:00:33.000Z"  
&nbsp;&nbsp;&nbsp;&nbsp;},  
&nbsp;&nbsp;&nbsp;&nbsp;"timeZoneOffset": {  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"$numberLong": "32400"  
&nbsp;&nbsp;&nbsp;&nbsp;},  
&nbsp;&nbsp;&nbsp;&nbsp;"federatedSession": "gpfljmhuj8ocisiq855omkpqi7"  
&nbsp;&nbsp;},  
&nbsp;&nbsp;"_class": "org.apereo.openlrw.events.service.repository.MongoEvent"  
},  
