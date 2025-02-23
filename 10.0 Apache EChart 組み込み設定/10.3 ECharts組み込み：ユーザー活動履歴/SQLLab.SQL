SELECT 
    classId,
    FUKU_COURCE_NAME,
    FUKU_ID_USER_NAME,
    FUKU_TASK_QNO,
    FUKU_TASK_NAME,
    FUKU_EVTM_MIN,
    COUNT(*) as `CNT`
FROM
(
    SELECT 
        DAY(mongoEvent.event.`eventtime`) AS FUKU_SEL_DD,
        HOUR(mongoEvent.event.`eventtime`) AS FUKU_SEL_HH,
        MINUTE(mongoEvent.event.`eventtime`) AS FUKU_SEL_MM,
        date_trunc('DAY', mongoEvent.event.`eventtime`) AS FUKU_EVTM_DAY,
        date_trunc('HOUR', mongoEvent.event.`eventtime`) AS FUKU_EVTM_HOUR,
        date_trunc('MINUTE', mongoEvent.event.`eventtime`) AS FUKU_EVTM_MIN,
        classId,
        mongoEvent.event.`group`.`_id` AS FUKU_COURCE_ID,
        mongoEvent.event.`group`.`name` AS FUKU_COURCE_NAME,
        split_part(mongoEvent.event.`action`,'#', 2) AS FUKU_ACT,
        userId,
        mongoEvent.event.`agent`.`name` AS FUKU_USER_NAME,
        concat(userId, ':', mongoEvent.event.`agent`.`name`) AS FUKU_ID_USER_NAME,
        mongoEvent.event.`target`.`_id` AS FUKU_TASK_URL,
        split_part(mongoEvent.event.`target`.`_id` ,'id=', 2) AS FUKU_TASK_ID,
        mongoEvent.event.`target`.`name` AS FUKU_TASK_NAME,
        split_part(mongoEvent.event.`target`.`name`,'.', 1) AS FUKU_TASK_QNO,
        split_part(mongoEvent.event.`membership`.`roles`[0],'#', 2) AS FUKU_ROLE
    FROM 
        mongo.fuku_db.mongoEvent
    ORDER BY
        mongoEvent.event.`eventtime` DESC
) AS virtual_table
WHERE 
    FUKU_ROLE IN ('Learner') 
AND
    FUKU_TASK_NAME IS NOT NULL
AND
    FUKU_ACT IN ('Started', 'Submitted') 
GROUP BY
    classId,
    FUKU_COURCE_NAME,
    FUKU_ID_USER_NAME,
    FUKU_TASK_QNO,
    FUKU_TASK_NAME,
    FUKU_EVTM_MIN
ORDER BY
    classId DESC,
  FUKU_EVTM_MIN DESC
;
