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
 * Strings for component 'tool_dynamicrule', language 'zh_cn_wp', version '3.11'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = '启用';
$string['activerules'] = '启用规则';
$string['addcondition'] = '新增条件';
$string['addconditions'] = '为此规则新增条件';
$string['addoutcome'] = '新增动作';
$string['addoutcomes'] = '为此规则新增动作';
$string['after'] = '或之后';
$string['archive'] = '归档';
$string['archived'] = '已归档';
$string['archivedrules'] = '归档规则';
$string['archiverule'] = '归档规则 \'{$a}\\';
$string['availableplaceholders'] = '有效的占位符';
$string['before'] = '之前';
$string['body'] = '主文';
$string['broken'] = '中断';
$string['cachedef_eventsubscriptions'] = '这将储存规则条件的事件订阅列表。';
$string['cannotenablerule'] = '无法启用规则 \'{$a}\' ，除非它具有条件和动作，不会中断且不会归档';
$string['cohort'] = '群组';
$string['conditioncohortmember'] = '用户是群组的成员';
$string['conditioncohortmemberdescription'] = '属于群组 \'{$a}\\ 成员的用户';
$string['conditioncohortnotmember'] = '用户不是群组的成员';
$string['conditioncohortnotmemberdescription'] = '不属于 \'{$a}\\ 群组成员的用户';
$string['conditioncoursecompleted'] = '课程完成';
$string['conditioncoursecompleteddescription'] = '完成课程 \'{$a}\\ 的用户';
$string['conditioncoursenotcompleted'] = '课程未完成';
$string['conditioncoursenotcompleteddescription'] = '未完成课程 \'{$a}\\ 的用户';
$string['conditionisbroken'] = '此条件组态已中断。';
$string['conditionnotsaved'] = '条件未保存。';
$string['conditions'] = '条件';
$string['conditionuserenrolled'] = '已选课用户';
$string['conditionuserenrolleddescription'] = '在 \'{$a->course}\\ 课程中已选课用户';
$string['conditionuserlastlogin'] = '用户上次登录';
$string['conditionuserlastlogindescriptionbefore'] = '在 {$a} 以前登录的用户';
$string['conditionuserlastlogindescriptionever'] = '至少登录一次的用户';
$string['conditionuserlastlogindescriptioninlast'] = '在 {$a} 以前，最后登录的用户';
$string['conditionuserlastlogindescriptionnever'] = '从未登录的用户';
$string['conditionusernotenrolled'] = '未选课的用户';
$string['conditionusernotenrolleddescription'] = '未在 \'{$a->course}\\ 课程中选课用户';
$string['conditionusernotenrolleddescriptionwithenrol'] = '未在 \'{$a->course}\\ 课程中使用 \'{$a->enrol}\\ 选课模块的用户';
$string['conditionuserprofilefield'] = '用户个人资料字段';
$string['conditionuserprofilefielddescription'] = '用户个人资料字段 \'{$a->fieldname}\' 的值为 \'{$a->fieldvalue}\\ 的用户';
$string['confirmarchiverule'] = '您确定要将规则 \'{$a}\' 归档吗？归档的动态规则仍可用于当前和未来的报告。';
$string['confirmdeletecondition'] = '您确定要删除条件 \'{$a}\' 以及所有相关数据吗？此操作无法撤销。';
$string['confirmdeleteoutcome'] = '您确定要删除动作 \'{$a}\' 以及所有相关数据吗？此操作无法撤消。';
$string['confirmdeleterule'] = '您确定要删除规则 \'{$a}\' 以及所有相关数据吗？此操作无法撤消。';
$string['confirmdisableruleforedit'] = '此规则将自动停用以进行编辑。';
$string['confirmduplicaterule'] = '您确定要复制规则 \'{$a}\' 吗？';
$string['confirmenablerule'] = '您确定要启用此规则吗？启用它会影响 {$a} 用户。';
$string['countmatchingusers'] = '{$a} 总匹配';
$string['courseinternalid'] = '在网址中使用内部课程ID';
$string['courseurl'] = '课程网址';
$string['date'] = '日期';
$string['datetypeever'] = '自从';
$string['datetypeinlast'] = '最后';
$string['datetypenever'] = '从不';
$string['datetypenone'] = '未定义';
$string['datetypepast'] = '以外';
$string['deletecondition'] = '删除条件';
$string['deleteoutcome'] = '删除动作';
$string['deleterule'] = '删除规则 \'{$a}\\';
$string['details'] = '细节';
$string['disablerule'] = '停用规则 \'{$a}\\';
$string['duplicate'] = '复制';
$string['dynamicrule:manage'] = '管理动态规则';
$string['editactions'] = '编修规则 \'{$a}\\ 的动作';
$string['editcondition'] = '编修条件';
$string['editdetails'] = '编修规则 \'{$a}\\ 的细节';
$string['editdetailsbutton'] = '编修细节';
$string['editoutcome'] = '编修动作';
$string['editrule'] = '编修规则 \'{$a}\\';
$string['editrulename'] = '编修规则 \'{$a}\\ 的名称';
$string['enable'] = '启用';
$string['enablehelp'] = '启用规则';
$string['enablehelp_help'] = '规则要求至少启用一个条件和一个操作。';
$string['enablehelpmodal'] = '启用规则';
$string['enablehelpmodal_help'] = '规则要求至少启用一个操作。';
$string['enablerule'] = '启用规则 \'{$a}\\';
$string['errorinvalidbody'] = '无效的通知主文';
$string['errorinvalidcohort'] = '无效的群组';
$string['errorinvalidcourse'] = '无效的课程';
$string['errorinvalidoperator'] = '无效的运算符。只允许在之前和之后。';
$string['errorinvalidsubject'] = '无效的通知主题';
$string['errorinvaliduserlastlogin'] = '无效的上次登录日期';
$string['errorinvaliduserlastlogintype'] = '无效的上次登入类型';
$string['errorinvaliduserprofilefield'] = '无效的个人资料字段';
$string['field'] = '字段';
$string['general'] = '一般';
$string['lastlogin'] = '用户上次登录的时间是';
$string['lastlogin_help'] = '您可以选择相对于当前日期的日期或从未登录的用户。';
$string['managebadges'] = '管理奖章';
$string['managecompetencies'] = '管理核心能力';
$string['managerules'] = '管理规则';
$string['match'] = '匹配';
$string['matchedtime'] = '匹配时间';
$string['matchlimitinvalid'] = '规则至少需要触发一次。';
$string['messageprovider:notificationoutcome'] = '动态规则工具的通知动作';
$string['newnameforrule'] = '规则 \'{$a}\\ 的新名称';
$string['newrule'] = '新规则';
$string['noruleconditions'] = '这个规则没有条件';
$string['noruleoutcomes'] = '这个规则没有动作';
$string['operator'] = '条件';
$string['operatorafter'] = '之后';
$string['operatorbefore'] = '之前';
$string['outcomebadge'] = '颁授奖章';
$string['outcomebadgedescription'] = '颁授奖章 \'{$a}\' 给用户';
$string['outcomecompetency'] = '颁授核心能力';
$string['outcomecompetencydescription'] = '颁授核心能力 \'{$a}\' 给用户';
$string['outcomeisbroken'] = '此动作组态已中断。';
$string['outcomenotification'] = '通知';
$string['outcomenotificationdescription'] = '发送通知 \'{$a}\' 给用户';
$string['outcomenotsaved'] = '动作未保存。';
$string['outcomes'] = '动作';
$string['placeholdersdesc'] = '占位符';
$string['placeholdersdesc_help'] = '占位符允许您新增动态内容，例如{{userfullname}}占位符将在发送给用户的通知中替换为用户全名。';
$string['pluginname'] = '动态规则';
$string['privacy:metadata:tool_dynamicrule_match'] = '用户与特定规则条件匹配的信息。由于匹配用户受规则中定义的动作所影响。';
$string['privacy:metadata:tool_dynamicrule_match:matchedtime'] = '指示用户何时与规则条件匹配的时间戳。';
$string['privacy:metadata:tool_dynamicrule_match:ruleid'] = '规则的ID。';
$string['privacy:metadata:tool_dynamicrule_match:unmatchedtime'] = '时间戳显示于当动作应用后，用户不再符合规则条件之时。';
$string['privacy:metadata:tool_dynamicrule_match:userid'] = '已与规则条件匹配的用户ID。';
$string['reg_wpdynamicrules'] = '动态规则 ({$a}) 的数量';
$string['reportmatchingusers'] = '与动态规则匹配的用户报告';
$string['reportrulematches'] = '匹配且与动态规则不匹配的用户报告';
$string['reportruleslist'] = '规则列表的系统报告';
$string['rolemanager'] = '动态规则管理器';
$string['rolemanagerdescription'] = '允许在当前租户中创建和管理动态规则';
$string['ruledisabled'] = '此规则已禁用。';
$string['ruleisbroken'] = '这个规则被中断了。至少有一个条件或动作被中断。';
$string['rulematchfreq'] = '匹配频率';
$string['rulematchfreq_help'] = '预设情况下，在满足条件时将规则动作应用于用户。如果启用了匹配频率，则规则应用程序将被限制为每个期望期间或之前所选择的次数。';
$string['rulematchfreqdesc0'] = '无法触发超过';
$string['rulematchfreqdesc1'] = '次数';
$string['rulematchfreqenable'] = '启用匹配频率限制';
$string['rulename'] = '名称';
$string['rulenotfound'] = '没有找到规则。';
$string['select'] = '选择';
$string['selectbadge'] = '选择奖章';
$string['selectbadge_help'] = '选择要颁发的奖章';
$string['selectcompetency'] = '选择核心能力';
$string['selectcompetency_help'] = '选择要颁发的核心能力';
$string['subject'] = '主旨';
$string['taskprocessrules'] = '流程规则';
$string['timeadded'] = '在此日期和时间或之后新增到群组中';
$string['timecompleted'] = '在完成日期和时间或之后';
$string['timeenrolled'] = '在选课开始日期和时间或之后';
$string['toomanybadgestoshow'] = '太多奖章以至于无法显示';
$string['unarchiverule'] = '取消归档规则 \'{$a}\\';
$string['unmatchedtime'] = '不匹配的时间';
$string['userplaceholders'] = '用户占位符';
$string['value'] = '值';
$string['viewmatchingusers'] = '查看匹配的用户';
$string['viewreport'] = '查看 \'{$a}\\ 的报告';
