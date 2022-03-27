/* output.pathに絶対パスを指定するため、pathモジュールが必要 */
const path = require('path');


module.exports = {
    /* モードの設定 webpack4からは必須の設定*/
    mode: 'development',
    /* エントリーポイントの設定 */
    entry: './src/js/entry.js',
    /* 出力の設定 */
    output: {
        /* 出力するファイル名 */
        filename: 'bundle.js',
        /* 出力先のパス（絶対パス） */
        path: path.join(__dirname, 'app/js')
    }
};