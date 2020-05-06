import Vue from 'vue'
import VueI18n from 'vue-i18n'
import en from '../langs/en.json'
import vn from '../langs/vn.json'
import jp from '../langs/jp.json'

Vue.use(VueI18n)

export const i18n = new VueI18n({
    locale: 'en',
    fallbackLocale: 'vn',
    messages: {
        en,
        vn,
        jp

        // en: {
        //     welcomeMsg: 'Welcome to your Vue.js App',
        //     pluginsTxt: 'Installed CLI Plugins',
        //     guideTxt: 'For a guide and recipes on how to configure / customize this project, {break} an {action}',
        //     guideDocTxt: 'vue-cli documentation'
        // },
        // ru: {
        //     welcomeMsg: 'Chào mừng đến với Vue.js App',
        //     pluginsTxt: 'Cài đặt plugins',
        //     guideTxt: 'Hướng dẫn các cấu hình và tùy biến project, {break} và {action}',
        //     guideDocTxt: 'Tài liệu vue-cli'
        // }
    }
})
