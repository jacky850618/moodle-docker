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
 * Strings for component 'tool_analytics', language 'zh_cn_wp', version '3.11'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = '精确度';
$string['allpredictions'] = '所有预测';
$string['alltimesplittingmethods'] = '所有分析区间';
$string['analysingsitedata'] = '分析网站';
$string['analyticmodels'] = '分析模块';
$string['bettercli'] = '评估模块和生成预测可能涉及繁重的过程。建议从命令行运行这些操作。';
$string['cantguessenddate'] = '无法猜测结束日期';
$string['cantguessstartdate'] = '无法猜测开始日期';
$string['classdoesnotexist'] = '类型 {$a} 不存在';
$string['clearmodelpredictions'] = '您确定要清除所有预测 "{$a}" 吗？';
$string['clearpredictions'] = '清除预测';
$string['clienablemodel'] = '您可以透过 ID 选择分析区间来启用模型。备注：您稍后也可以使用网页界面来启用它（选择「无」退出）。';
$string['clievaluationandpredictions'] = '重复排程任务启用的模块并获得预测。透过网页界面的评估模块已禁用。透过禁用<a href="{$a}">\'onlycli\'</a>分析设置，您可以允许使用网页界面手动执行这些程序。';
$string['clievaluationandpredictionsnoadmin'] = '重复排程任务启用的模块并获得预测。透过网页界面的评估模块已禁用。它可以由网站系统管理员启用。';
$string['component'] = '组件';
$string['componentcore'] = '核心';
$string['componentselect'] = '选择组件 \'{$a}\' 提供的所有模块';
$string['componentselectnone'] = '全部取消选择';
$string['createmodel'] = '建立模块';
$string['currenttimesplitting'] = '当前分析区间';
$string['delete'] = '删除';
$string['deletemodelconfirmation'] = '您确定要删除 "{$a}" 吗？这个动作将无法复原。';
$string['disabled'] = '禁用';
$string['editmodel'] = '编修模块 "{$a}"';
$string['edittrainedwarning'] = '该模型已经过训练。请注意，更改其指标或其分析区间将删除其先前的预测，并开始生成新的预测。';
$string['enabled'] = '已启用';
$string['errorcantenablenotimesplitting'] = '您需要在启用模块之前选择一个分析区间';
$string['errornoenabledandtrainedmodels'] = '没有已启用且已训练的模块可供预测。';
$string['errornoenabledmodels'] = '没有已启用的模块可训练';
$string['errornoexport'] = '只能导出已训练的模块';
$string['errornostaticevaluated'] = '基于假设的模块无法评估。根据它们的定义，它们始终是100％正确的。';
$string['errornostaticlog'] = '由于没有效能日志，因此无法评估基于假设的模块。';
$string['erroronlycli'] = '仅允许透过命令行执行';
$string['errortrainingdataexport'] = '模块训练数据无法导出';
$string['evaluate'] = '评估';
$string['evaluatemodel'] = '评估模块';
$string['evaluationinbatches'] = '计算网站内容并分批存储。评估过程可以随时停止。下次运行时，它将从停止点开始继续运行。';
$string['evaluationmode'] = '评估模块';
$string['evaluationmode_help'] = '"有两组评估模块：

* 训练后的模块 - 网站数据用作测试数据，以评估训练后模块的准确性。
* 组态 - 为了训练和测试模块配置的准确性，网站数据分为训练和测试资料。

当已将训练模型汇入到网站点中并且尚未使用网站数据对其进行训练时，训练模块才可使用。';
$string['evaluationmodecolconfiguration'] = '组态';
$string['evaluationmodecoltrainedmodel'] = '已训练的模块';
$string['evaluationmodeconfiguration'] = '评估模块配置';
$string['evaluationmodeinfo'] = '该模块已汇入网站。您可以评估模块的效能，也可以使用网站数据评估模块配置的效能。';
$string['evaluationmodetrainedmodel'] = '评估已训练的模块';
$string['export'] = '汇出';
$string['exportincludeweights'] = '包含已训练模块的权重';
$string['exportmodel'] = '汇出组态';
$string['exporttrainingdata'] = '导出训练资料';
$string['extrainfo'] = '信息';
$string['generalerror'] = '评估错误。状态代码 {$a}';
$string['getpredictions'] = '取得预测';
$string['goodmodel'] = '这是用于获取预测的良好模块。启用它以开始获取预测。';
$string['ignoreversionmismatches'] = '忽略版本不匹配';
$string['ignoreversionmismatchescheckbox'] = '忽略此网站版本和原始网站版本之间的差异。';
$string['importedsuccessfully'] = '该模块已成功汇入。';
$string['importmodel'] = '汇入模块';
$string['indicators'] = '指标';
$string['indicators_help'] = '您认为的这些指针将导致对目标的准确预测。';
$string['indicatorsnum'] = '指标数量：{$a}';
$string['info'] = '信息';
$string['insights'] = '分析报告';
$string['invalidanalysables'] = '无效的网站组件';
$string['invalidanalysablesinfo'] = '本页列出了此预测模块无法使用的可分析组件。列出的组件既不能用于训练预测模块，也不能用于对其进行预测。';
$string['invalidanalysablestable'] = '无效的网站可分析组件列表';
$string['invalidindicatorsremoved'] = '已新增了模块。已自动删除不适用于所选目标的指针。';
$string['invalidprediction'] = '取得预测无效';
$string['invalidtraining'] = '无效的训练模块';
$string['loginfo'] = '纪录额外信息';
$string['missingmoodleversion'] = '汇入的档案未定义版本号';
$string['modelid'] = '模块 ID';
$string['modelinvalidanalysables'] = '模块 "{$a}" 的无效可分析组件';
$string['modelname'] = '模块名称';
$string['modelresults'] = '结果 {$a}';
$string['modeltimesplitting'] = '分析区间';
$string['newmodel'] = '新模块';
$string['nextpage'] = '下一页';
$string['nodatatoevaluate'] = '没有数据可供评估模块';
$string['nodatatopredict'] = '没有新的组件可以预测。';
$string['nodatatotrain'] = '没有新的资料可用于训练。';
$string['noinvalidanalysables'] = '此网站不包含任何无效的可分析组件。';
$string['notdefined'] = '尚未定义';
$string['pluginname'] = '分析模块';
$string['predictionprocessfinished'] = '预测过程已完成';
$string['predictionresults'] = '预测结果';
$string['predictmodels'] = '预测模块';
$string['predictorresultsin'] = '预测器在目录 {$a} 中记录的信息';
$string['previouspage'] = '上一页';
$string['privacy:metadata'] = '分析外挂模块不储存任何个人资料。';
$string['restoredefault'] = '还原默认模块';
$string['restoredefaultempty'] = '请选择要还原的模块。';
$string['restoredefaultinfo'] = '自安装以来，这些默认模块已遗失或已更改。您可以还原选定的默认模块。';
$string['restoredefaultnone'] = '系统核心和已安装外挂所提供的默认模块均已建立。找不到新模块；没有什么可还原的。';
$string['restoredefaultsome'] = '成功重新建立了 {$ a-> count} 个新模块。';
$string['restoredefaultsubmit'] = '还原所选的';
$string['sameenddate'] = '当前结束日期良好';
$string['samestartdate'] = '当前开始日期良好';
$string['selecttimesplittingforevaluation'] = '选择要用于评估模块配置的分析区间。';
$string['target'] = '目标';
$string['target_help'] = '模块将预测的目标。';
$string['timesplittingnotdefined'] = '没有定义分析区间。';
$string['timesplittingnotdefined_help'] = '启用模块之前，您需要选择一个分析区间。';
$string['trainandpredictmodel'] = '训练模型和计算预测';
$string['trainingprocessfinished'] = '训练过程完成';
$string['trainingresults'] = '训练结果';
$string['trainmodels'] = '训练模型';
$string['versionnotsame'] = '汇入的档案版本 ({$a->importedversion}) 与目前版本 ({$a->version})  不同';
$string['viewlog'] = '评估日志';
$string['weeksenddateautomaticallyset'] = '依据开始日期和区段数自动设置结束日期';
$string['weeksenddatedefault'] = '结束日期由课程开始日期自动计算得出。';
