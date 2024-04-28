const path = require('path');
const filePath = 'your file path';
const directoryName = path.dirname(filePath);
const fileName = path.basename(filePath);
const fileExtension = path.extname(filePath);
console.log("Directory Name:", directoryName);
console.log("File Name:", fileName);
console.log("File Extension:", fileExtension);
