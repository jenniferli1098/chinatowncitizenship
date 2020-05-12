  /**
   * TODO(developer): Uncomment the following line before running the sample.
   */
  const projectId = 'articulate-case-277023';

  // Imports the Google Cloud client library
  const {Translate} = require('@google-cloud/translate').v2;

  // Instantiates a client
  const translate = new Translate({projectId});

  async function tr(str) {
    // The text to translate
    const text = 'Hello!';

    // The target language
    const target = 'zh';

    const [translation] = await translate.translate(text, target);

    console.log(`Translation: ${translation}`);
  }

  tr("chicken");
