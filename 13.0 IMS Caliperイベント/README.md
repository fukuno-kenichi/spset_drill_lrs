MongoDBに格納されたIMS Caliperイベントについて，データの一部を掲載する．  
リポジトリのevent.jsonファイルを参照ください．

```
{
  "_id": {
    "$oid": "67712bd134ce5017ca930044"
  },
  "userId": "8",　※ユーザーID
  "classId": "4",　※コースID
  "organizationId": "90c9be73-0428-4b16-aacc-6049c5c10ea8",
  "tenantId": "66c41827f2ace639ac90b666",
  "event": {
    "_id": "c965e79077b14e6ba02263895abbe85f",
    "context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",
    "type": "http://purl.imsglobal.org/caliper/v1/AssessmentEvent",
    "agent": {
      "_id": "https://gsis-fukuno.com/mdl_itpass/user/8",
      "type": "http://purl.imsglobal.org/caliper/v1/lis/Person",
      "context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",
      "name": "No.3 協力者",　※学習者名
      "extensions": {}
    },
    "action": "http://purl.imsglobal.org/vocab/caliper/v1/action#Submitted",　※アクション
    "object": {
      "_id": "https://gsis-fukuno.com/mdl_itpass/mod/quiz/attempt.php?attempt=97",
      "type": "http://purl.imsglobal.org/caliper/v1/Attempt",
      "context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",
      "extensions": {},
      "assignable": "https://gsis-fukuno.com/mdl_itpass/mod/quiz/view.php?id=99",
      "actor": "https://gsis-fukuno.com/mdl_itpass/user/8"
    },
    "target": {
      "_id": "https://gsis-fukuno.com/mdl_itpass/mod/quiz/view.php?id=99",　※タスク（クイズ）ID
      "type": "http://purl.imsglobal.org/caliper/v1/Assessment",
      "context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",
      "name": "Q10.ソフトウェア",　※タスク（クイズ）名
      "description": "",
      "extensions": {},
      "objectType": [],
      "alignedLearningObjective": [],
      "keywords": []
    },
    "edApp": {
      "_id": "https://gsis-fukuno.com/mdl_itpass",
      "type": "http://purl.imsglobal.org/caliper/v1/SoftwareApplication",
      "context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",
      "name": "mdl_itpass site",
      "description": "A Moodle course",
      "extensions": {}
    },
    "group": {
      "_id": "https://gsis-fukuno.com/mdl_itpass/course/4",　※コースID
      "type": "http://purl.imsglobal.org/caliper/v1/lis/CourseSection",
      "context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",
      "name": "ITパスポート短期学習講座",　※コース名
      "description": "<p>IPパスポートに出題される内容を学習します．</p>",
      "extensions": {},
      "courseNumber": ""
    },
    "membership": {
      "_id": "https://gsis-fukuno.com/mdl_itpass/course/4/user/8",
      "type": "http://purl.imsglobal.org/caliper/v1/lis/Membership",
      "context": "http://purl.imsglobal.org/ctx/caliper/v1/Context",
      "extensions": {},
      "member": "https://gsis-fukuno.com/mdl_itpass/user/8",
      "organization": "https://gsis-fukuno.com/mdl_itpass/course/4",
      "roles": [　※メンバー属性
        "http://purl.imsglobal.org/vocab/lis/v2/membership#Learner"
      ],
      "status": "http://purl.imsglobal.org/vocab/lis/v2/status#Active"
    },
    "eventTime": {　※イベント時間
      "$date": "2024-12-29T11:00:33.000Z"
    },
    "timeZoneOffset": {
      "$numberLong": "32400"
    },
    "federatedSession": "gpfljmhuj8ocisiq855omkpqi7"
  },
  "_class": "org.apereo.openlrw.events.service.repository.MongoEvent"
},
```
