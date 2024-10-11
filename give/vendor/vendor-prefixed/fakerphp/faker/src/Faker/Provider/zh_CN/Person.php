<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 10-October-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\zh_CN;

class Person extends \Give\Vendors\Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{lastName}}{{firstNameMale}}',
    ];

    protected static $femaleNameFormats = [
        '{{lastName}}{{firstNameFemale}}',
    ];

    protected static $titleMale = ['先生', '医生', '老师', '教授', '律师', '经理'];

    protected static $titleFemale = ['女士', '小姐', '夫人', '太太', '医生', '老师', '教授', '律师', '经理'];

    /**
     * According to http://baike.baidu.com/view/6109935.htm,
     * these are the top 300 lastnames from the 6th Chinese national census of population,
     * containing 299 single-character surname and 1 double-character surname '欧阳',
     * so you can get random names including double-character surname but not too many.
     */
    protected static $lastName = [
        '李', '王', '张', '刘', '陈', '杨', '赵', '黄', '周', '吴',
        '徐', '孙', '胡', '朱', '高', '林', '何', '郭', '马', '罗',
        '梁', '宋', '郑', '谢', '韩', '唐', '冯', '于', '董', '萧',
        '程', '曹', '袁', '邓', '许', '傅', '沉', '曾', '彭', '吕',
        '苏', '卢', '蒋', '蔡', '贾', '丁', '林', '薛', '叶', '阎',
        '余', '潘', '杜', '戴', '夏', '钟', '汪', '田', '任', '姜',
        '范', '方', '石', '姚', '谭', '廖', '邹', '熊', '金', '陆',
        '郝', '孔', '白', '崔', '康', '毛', '邱', '秦', '江', '史',
        '顾', '侯', '邵', '孟', '龙', '万', '段', '雷', '钱', '汤',
        '尹', '黎', '易', '常', '武', '乔', '贺', '赖', '龚', '文',
        '庞', '樊', '兰', '殷', '施', '陶', '洪', '翟', '安', '颜',
        '倪', '严', '牛', '温', '芦', '季', '俞', '章', '鲁', '葛',
        '伍', '韦', '申', '尤', '毕', '聂', '丛', '焦', '向', '柳',
        '邢', '路', '岳', '齐', '沿', '梅', '莫', '庄', '辛', '管',
        '祝', '左', '涂', '谷', '祁', '时', '舒', '耿', '牟', '卜',
        '路', '詹', '关', '苗', '凌', '费', '纪', '靳', '盛', '童',
        '欧', '甄', '项', '曲', '成', '游', '阳', '裴', '席', '卫',
        '查', '屈', '鲍', '位', '覃', '霍', '翁', '隋', '植', '甘',
        '景', '薄', '单', '包', '司', '柏', '宁', '柯', '阮', '桂',
        '闵', '欧阳', '解', '强', '柴', '华', '车', '冉', '房', '边',
        '辜', '吉', '饶', '刁', '瞿', '戚', '丘', '古', '米', '池',
        '滕', '晋', '苑', '邬', '臧', '畅', '宫', '来', '嵺', '苟',
        '全', '褚', '廉', '简', '娄', '盖', '符', '奚', '木', '穆',
        '党', '燕', '郎', '邸', '冀', '谈', '姬', '屠', '连', '郜',
        '晏', '栾', '郁', '商', '蒙', '计', '喻', '揭', '窦', '迟',
        '宇', '敖', '糜', '鄢', '冷', '卓', '花', '仇', '艾', '蓝',
        '都', '巩', '稽', '井', '练', '仲', '乐', '虞', '卞', '封',
        '竺', '冼', '原', '官', '衣', '楚', '佟', '栗', '匡', '宗',
        '应', '台', '巫', '鞠', '僧', '桑', '荆', '谌', '银', '扬',
        '明', '沙', '薄', '伏', '岑', '习', '胥', '保', '和', '蔺',
    ];

    protected static $firstNameMale = [
        '伟', '强', '磊', '洋', '勇', '军', '杰', '涛', '超', '明',
        '刚', '平', '辉', '鹏', '华', '飞', '鑫', '波', '斌', '宇',
        '浩', '凯', '健', '俊', '帆', '帅', '旭', '宁', '龙', '林',
        '欢', '阳', '建华', '亮', '成', '畅', '建', '峰', '建国', '建军',
        '晨', '瑞', '志强', '兵', '雷', '东', '欣', '博', '彬', '坤',
        '全安', '荣', '岩', '杨', '文', '利', '楠', '建平', '嘉俊', '晧',
        '建明', '子安', '新华', '鹏程', '学明', '博涛', '捷', '文彬', '楼', '鹰',
        '松', '伦', '超', '钟', '瑜', '振国', '洪', '毅', '昱然', '哲',
        '翔', '翼', '祥', '国庆', '哲彦', '正诚', '正豪', '正平', '正业', '志诚',
        '志新', '志勇', '志明', '志强', '志文', '致远', '智明', '智勇', '智敏', '智渊',
    ];

    protected static $firstNameFemale = [
        '芳', '娜', '敏', '静', '敏静', '秀英', '丽', '洋', '艳', '娟',
        '文娟', '君', '文君', '珺', '霞', '明霞', '秀兰', '燕', '芬', '桂芬',
        '玲', '桂英', '丹', '萍', '华', '红', '玉兰', '桂兰', '英', '梅',
        '莉', '秀珍', '雪', '依琳', '旭', '宁', '婷', '馨予', '玉珍', '凤英',
        '晶', '欢', '玉英', '颖', '红梅', '佳', '倩', '琴', '兰英', '云',
        '洁', '爱华', '淑珍', '春梅', '海燕', '晨', '冬梅', '秀荣', '瑞', '桂珍',
        '莹', '秀云', '桂荣', '秀梅', '丽娟', '婷婷', '玉华', '琳', '雪梅', '淑兰',
        '丽丽', '玉', '秀芳', '欣', '淑英', '桂芳', '丽华', '丹丹', '桂香', '淑华',
        '秀华', '桂芝', '小红', '金凤', '文', '利', '楠', '红霞', '瑜', '桂花',
        '璐', '凤兰', '腊梅', '瑶', '嘉', '怡', '冰冰', '玉梅', '慧', '婕',
    ];
}
