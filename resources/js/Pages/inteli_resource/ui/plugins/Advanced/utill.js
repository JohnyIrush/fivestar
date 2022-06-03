const getFileSize = (bytes, decimalPoint) => {
    if(bytes === 0) return '0 bytes'

    let k = 1000
    let dm = decimalPoint || 1
    let sizes = ['Bytes', 'KB', 'MB','GB','TB','PB','EB','ZB', 'YB']
    let i = Math.floor(Math.log(bytes) / Math.log(k))
    return parseFloat(bytes / Math.pow(k, i)).toFixed(dm) + ' ' + sizes[i]
}


const getFileName = (val) =>
{
    if (val.indexOf('', 41) > 40) {
        return val.slice(0, 41) + "..."
    }
    else{
     return val
    }
}

const getFileType = (val, type = 'type') => {
    const arrFile = val.split('/')
    if (type == 'format')
    {
        arrFile.shift()
    }
    else
    {
        arrFile.pop()
    }
    return arrFile.join("")
}

const getFileDate = (val) =>
{
    return new Date(val).toDateString()
}

const getFileImage = (image) =>
{
    return URL.createObjectURL(image)
}

const loadFileImage = (image) =>
{
    return URL.createObjectURL(image)
}

/*Alternative*/

const formatFileSize = (file) =>
{
    let nBytes = 0, oFiles = file, nFiles = oFiles.length

    for (let nFileId = 0; nFileId < nFiles.length; nFileId++) {
        const nBytes = nFiles[nFileId].size;
    }

    let sOutput = nBytes + " bytes"

    const sMultiples = ["KiB", "MiB", "GiB", "TiB", "PiB", "EiB", "ZiB", "YiB"];
    for (let nMultiple = 0, nApprox = nBytes / 1024; nApprox >1; nApprox /= 1024, nMultiple++) {

        sOutput = nApprox.toFixed(3) + " " + sMultiples[nMultiple] + " (" + nBytes + " bytes)";
    }
    return sOutput;
}

export
{
    getFileSize,
    getFileName,
    getFileType,
    getFileDate,
    getFileImage,
    loadFileImage
}
