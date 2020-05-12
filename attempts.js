const projectId = 'articulate-case-277023';

const {Translate} = require('@google-cloud/translate').v2;

const translate = new Translate({projectId});

async function tr(str) {
  
    const text = 'Hello!';

    const target = 'zh';

    const [translation] = await translate.translate(text, target);

    console.log(`Translation: ${translation}`);
  }

  tr("chicken");
