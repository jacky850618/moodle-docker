<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_certification', language 'zh_cn_wp', version '3.11'.
 *
 * @package     tool_certification
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '动作';
$string['active'] = '启用';
$string['activecertifications'] = '启用的检定';
$string['afterallocationdate'] = '指派日期后';
$string['aftercompletion'] = '完成之后';
$string['afterduedate'] = '截止日期之后';
$string['afterlatest'] = '以最新的为准';
$string['afterpreviouscertexpdate'] = '在之前的检定到期日之后';
$string['afterstartdate'] = '开始日期之后';
$string['allocateusers'] = '指派用户';
$string['allocationdate'] = '指派日期';
$string['allocationdateisonorafter'] = '指派日期或之后';
$string['allocationenddate'] = '指派结束日期';
$string['allocationfor'] = '\'{$a}\' 的指派';
$string['allocationsource'] = '指派来源';
$string['allocationstartdate'] = '指派开始日期';
$string['allocationwindowenddate'] = '结束日期';
$string['allocationwindowenddate_help'] = '指派窗口的结束日期';
$string['allocationwindowstartdate'] = '开始日期';
$string['allocationwindowstartdate_help'] = '指派窗口的开始日期';
$string['archive'] = '归档';
$string['archived'] = '已归档';
$string['archivedcertifications'] = '已归档检定';
$string['archivedconfirmation'] = '您确定要将检定 \'{$a}\' 归档吗？管理人员或学员将无法再使用已归档检定，只能在历史报告中查看。';
$string['archivedon'] = '归档';
$string['basic'] = '基本';
$string['calendarduedate'] = '检定截止日期 {$a}';
$string['calendarexpirydate'] = '检定到期日 {$a}';
$string['cannotallocateuser'] = '无法将用户指派到检定 {$a}';
$string['certification:allocateuser'] = '指派用户的权限';
$string['certification:edit'] = '编辑权限';
$string['certification:view'] = '查看权限';
$string['certificationfullname'] = '检定全名';
$string['certificationfullname_help'] = '检定全名';
$string['certificationidnumber'] = '检定ID号码';
$string['certificationidnumber_help'] = '检定的ID号仅在将检定与外部系统匹配时使用，并且不会显示在网站的任何位置。如果认证具有正式的代码名称，则可以输入，否则该字段可以留空。';
$string['certificationname'] = '检定名称';
$string['certificationrules'] = '检定规则';
$string['certifications'] = '检定';
$string['certificationstatus'] = '检定状态';
$string['certificationtags'] = '检定标签';
$string['certificationtags_help'] = '此检定的标签';
$string['certified'] = '认证的';
$string['certifiedcertificationslink'] = '<a href="{$a->href}">认证检定: {$a->count}</a>';
$string['certifieddate'] = '认证日期';
$string['certifieddateisonorafter'] = '认证日期或之后';
$string['certify'] = '认证';
$string['certifyexpirydate_help'] = '在「默认」（显示目前检定组态）、「从不」或自定义日期之间选择此认证用户的到期日期。';
$string['certifyuser'] = '认证用户';
$string['conditioncertificationcertified'] = '检定已认证';
$string['conditioncertificationexpired'] = '检定已过期';
$string['conditioncertificationnotcertified'] = '检定未认证';
$string['conditioncertificationoverdue'] = '检定已逾期';
$string['conditioncertificationstatus'] = '检定状态';
$string['conditioncertificationstatusdescription'] = '在检定 \'{$a->fullname}\' 中具有 \'{$a->status}\' 状态的用户';
$string['conditioncertificationstatusdescriptionnegated'] = '在检定 \'{$a->fullname}\' 中没有 \'{$a->status}\' 状态的用户';
$string['conditioncertificationsuspended'] = '检定已暂停';
$string['conditionuserallocated'] = '指派到检定的用户';
$string['conditionuserallocateddescription'] = '指派到检定 {$a} 的用户';
$string['conditionusernotallocated'] = '未指派到检定的用户';
$string['conditionusernotallocateddescription'] = '未指派到检定 {$a} 的用户';
$string['confirmdeletecertification'] = '您确定要删除检定 \'{$a}\' 和其相关数据吗？此操作无法撤销。';
$string['confirmdeleteuserallocation'] = '您确定要完全删除被指派的用户 \'{$a}\' 和其相关数据吗？此操作无法撤销。';
$string['confirmduplicate'] = '将创建检定组态的复本，您将能够更改计划和其他属性。不会将指派用户转移到复本';
$string['dateoverrided'] = '无效的日期';
$string['default'] = '预设';
$string['deleteuserallocation'] = '删除指派的用户';
$string['duedate'] = '截止日期';
$string['duedate_help'] = '检定到期日';
$string['duedateisonorafter'] = '截止日期或之后';
$string['duplicate'] = '复制';
$string['dynamic'] = '动态';
$string['dynamicrules'] = '动态规则';
$string['dynamicrulesplugincheck'] = '没有插件「tool_dynamicrules」是不能查看动态规则列表的';
$string['dynamicrulewarningdeallocation'] = '如果用户是由另一个动态规则指派的，则只能进行未指派，手动指派不会受到影响。';
$string['editcertification'] = '编修检定 \'{$a}\'';
$string['editcertificationname'] = '编修检定名称';
$string['editcertificationsettings'] = '编修检定设定';
$string['editcontent'] = '编修内容';
$string['editdetails'] = '编修细节';
$string['enddate'] = '结束日期';
$string['entitycertification'] = '检定';
$string['entitycertificationusers'] = '指派检定用户并完成';
$string['errorallocatinguserintorelatedprogram'] = '无法将用户指派到相关计划中';
$string['errorallocationsourcenotfound'] = '未找到分配源';
$string['errorcantdeletecertification'] = '无法删除检定';
$string['errorcantdeletenotarchivedcertification'] = '无法删除未归档的检定';
$string['errorcantmanageusers'] = '无法管理用户';
$string['errorcantrestorecertification'] = '无法恢复检定';
$string['errorevaluatinguserallocationstatus'] = '评估用户指派状态时出错';
$string['errorinvalidcertification'] = '无效的检定';
$string['errorinvaliddate'] = '无效的日期';
$string['errormissingassociatedprogram'] = '缺少相关计划';
$string['errornopermissionmanagecertifications'] = '没有管理检定的权限';
$string['errornopermissionviewreports'] = '没有察看报告的权限';
$string['errorreporttypedoesnotexist'] = '报告类型不存在';
$string['erroruseralreadyallocatedincertification'] = '用户已经在检定中指派';
$string['erroruseralreadyallocatedinprogram'] = '用户已经在计划中指派';
$string['errorusernotinsametenant'] = '用户不在同一个租户';
$string['eventcertificationcompleted'] = '已完成检定';
$string['eventcertificationcreated'] = '检定已建立';
$string['eventcertificationdeleted'] = '检定已删除';
$string['eventcertificationupdated'] = '检定已更新';
$string['eventuserallocated'] = '已指派的用户';
$string['eventuserdeallocated'] = '已取消指派的用户';
$string['eventuserupdated'] = '指派用户已更新';
$string['expired'] = '已过期';
$string['expiredcertificationslink'] = '<a href="{$a->href}">已过期检定: {$a->count}</a>';
$string['expireddateisonorafter'] = '过期日期或之后';
$string['expirydate'] = '到期日';
$string['expirydate_help'] = '检定的过期日';
$string['futureallocation'] = '未来的指派';
$string['idnumber'] = 'ID 号码';
$string['manageprograms'] = '管理计划';
$string['manual'] = '手动';
$string['markcertificationcompletednotice'] = '将检定标记为已完成，无需等待计划完成';
$string['messageprovider:certificationcompleted'] = '已完成的检定';
$string['messageprovider:certificationuserallocated'] = '已指派的用户';
$string['messageprovider:certificationuserdeallocated'] = '未指派的用户';
$string['missingcertification'] = '缺少检定';
$string['missingfullname'] = '缺少全名';
$string['missingprogram'] = '缺少计划';
$string['never'] = '从不';
$string['newcertification'] = '新检定';
$string['newvaluefor'] = '的新值';
$string['notificationmsgcertificationcompleted'] = '恭喜！您完成了 \'{$a}\' 检定。';
$string['notificationmsgcertificationuserallocated'] = '您已被指派到 \'{$a}\' 检定。';
$string['notificationmsgcertificationuserdeallocated'] = '您已从 \'{$a}\' 检定中取消指派。';
$string['notificationsubjectcertificationcompleted'] = '检定 \'{$a}\' 已完成';
$string['notificationsubjectcertificationuserallocated'] = '指派到检定 \'{$a}\'';
$string['notificationsubjectcertificationuserdeallocated'] = '从检定 \'{$a}\\ 取消指派';
$string['notset'] = '未定义';
$string['nousersselected'] = '请至少选择一个用户';
$string['ongoingcertificationslink'] = '<a href="{$a->href}">持续存在的检定: {$a->count}</a>';
$string['open'] = '打开';
$string['outcomeallocation'] = '将用户指派到检定';
$string['outcomeallocationdescription'] = '将用户指派到检定 {$a}';
$string['outcomedeallocation'] = '从检定中取消指派用户';
$string['outcomedeallocationdescription'] = '从检定中取消指派用户 {$a}';
$string['overdue'] = '过期的';
$string['overduecertificationslink'] = '<a href="{$a->href}">过期的检定: {$a->count}</a>';
$string['pluginname'] = '检定';
$string['previouscertexpirydate'] = '上笔检定到期日';
$string['privacy:metadata:certification_completions'] = '完成检定的相关信息。';
$string['privacy:metadata:certification_completions:certificationid'] = '用户已完成的检定。';
$string['privacy:metadata:certification_completions:expirydate'] = '该检定完成的到期日。';
$string['privacy:metadata:certification_completions:timemodified'] = '检定完成的最后修改时间。';
$string['privacy:metadata:certification_completions:userid'] = '完成检定的用户。';
$string['privacy:metadata:certification_users'] = '用户检定指派的相关信息。';
$string['privacy:metadata:certification_users:certificationid'] = '指派的检定。';
$string['privacy:metadata:certification_users:status'] = '用户检定已暂停。';
$string['privacy:metadata:certification_users:timemodified'] = '用户指派的修改时间。';
$string['privacy:metadata:certification_users:userid'] = '指派的用户。';
$string['program'] = '计划';
$string['progressreport'] = '计划的报告';
$string['recertduedaterelative'] = '截止日期';
$string['recertduedaterelative_help'] = '重新检定的截止日期';
$string['recertexpirydate'] = '到期日';
$string['recertexpirydate_help'] = '重新检定的到期日';
$string['recertgraceperiod'] = '宽限期';
$string['recertgraceperiod_help'] = '重新检定的宽限期';
$string['recertification'] = '重新检定';
$string['recertificationprogram'] = '重新检定的计划';
$string['recertificationprogram_help'] = '重新检定的计划';
$string['recertstartdaterelative'] = '开始日期';
$string['recertstartdaterelative_help'] = '重新检定的开始日期';
$string['reg_wpcertifications'] = '检定 ({$a}) 的数量';
$string['reportactivecerts'] = '已启用检定的系统报告';
$string['reportarchivedcerts'] = '已归档检定的系统报告';
$string['reportbuilderactivecertifications'] = '没有插件「tool_reportbuilder」是不能查看已启用检定列表的';
$string['reportbuilderarchivedcertifications'] = '没有插件「tool_reportbuilder」是不能查看已归档检定列表的';
$string['reportbuilderdynamicrules'] = '没有插件「tool_reportbuilder」是不能查看动态规则列表的';
$string['reportbuilderuserallocations'] = '没有插件「tool_reportbuilder」是不能查看指派用户列表的';
$string['reportbuilderuserlist'] = '没有插件「tool_reportbuilder」是不能查看用户列表的';
$string['reportcertificationprogress'] = '检定计划的系统报告';
$string['reportcertsusers'] = '检定用户的系统报告';
$string['reportusercerts'] = '用户检定列表的系统报告';
$string['requirerecertification'] = '需要重新检定';
$string['requirerecertification_help'] = '需要重新检定';
$string['restore'] = '恢复';
$string['revokecertification'] = '撤销检定';
$string['revokewarning'] = '您确定要撤销 \'{$a}\' 的检定吗？完成时可能已获得的奖励将不会被撤销。';
$string['rolemanager'] = '检定管理员';
$string['rolemanagerdescription'] = '允许在目前租户中创建和管理检定，并为其指派用户';
$string['schedule'] = '排程';
$string['scheduleupdatesuccess'] = '成功更新排程';
$string['selectadifferentprogram'] = '选择其他计划';
$string['selectcertificationcondition_help'] = '选择将使用此条件的检定';
$string['selectcertificationoutcome_help'] = '选择将使用此动作的检定';
$string['selectdate'] = '选择日期';
$string['selectprogram'] = '选择计划';
$string['selectprogram_help'] = '选择要与此检定关联的计划';
$string['startdate'] = '开始日期';
$string['startdate_help'] = '检定开始的日期';
$string['status'] = '状态';
$string['suspended'] = '暂停';
$string['suspendeddateisonorafter'] = '暂停日期或之后';
$string['tagarea_tool_certification'] = '检定';
$string['tags'] = '标签';
$string['toomanycertificationstoshow'] = '太多检定以至于无法显示';
$string['userallocation'] = '指派的用户';
$string['usercompletion'] = '完成的用户';
$string['userduedate'] = '截止日期';
$string['userduedate_help'] = '选择此用户的检定截止日期。';
$string['users'] = '用户';
$string['userstartdate'] = '开始日期';
$string['userstartdate_help'] = '选择此用户可以开始检定的日期。此日期仅适用于此用户。';
$string['userstatus'] = '状态';
$string['userstatus_help'] = '暂停状态将隐藏该用户的这个认证，而默认状态将显示该检定。';
