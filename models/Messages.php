<?php
# * ********************************************************************* *
# *                                                                       *
# *   Web interface for Messenger data                                    *
# *   This file is part of messengerportal. This project may be found at: *
# *   https://github.com/IdentityBank/Php_messengerportal.                *
# *                                                                       *
# *   Copyright (C) 2020 by Identity Bank. All Rights Reserved.           *
# *   https://www.identitybank.eu - You belong to you                     *
# *                                                                       *
# *   This program is free software: you can redistribute it and/or       *
# *   modify it under the terms of the GNU Affero General Public          *
# *   License as published by the Free Software Foundation, either        *
# *   version 3 of the License, or (at your option) any later version.    *
# *                                                                       *
# *   This program is distributed in the hope that it will be useful,     *
# *   but WITHOUT ANY WARRANTY; without even the implied warranty of      *
# *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the        *
# *   GNU Affero General Public License for more details.                 *
# *                                                                       *
# *   You should have received a copy of the GNU Affero General Public    *
# *   License along with this program. If not, see                        *
# *   https://www.gnu.org/licenses/.                                      *
# *                                                                       *
# * ********************************************************************* *

################################################################################
# Namespace                                                                    #
################################################################################

namespace app\models;

################################################################################
# Use(s)                                                                       #
################################################################################

use yii\db\ActiveRecord;

################################################################################
# Class(es)                                                                    #
################################################################################

class Messages extends ActiveRecord
{

    public static function tableName()
    {
        return 'messages';
    }

    public function rules()
    {
        return [
            [['createtime', 'schedule'], 'safe'],
            [['tag', 'from', 'to', 'attributes', 'data'], 'string'],
            [['type', 'status', 'from', 'to'], 'required'],
            [['type', 'status'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'createtime' => 'Create Time',
            'schedule' => 'Schedule',
            'tag' => 'Tag',
            'type' => 'Type',
            'status' => 'Status',
            'from' => 'From',
            'to' => 'To',
            'attributes' => 'Attributes',
            'data' => 'Data',
        ];
    }
}

################################################################################
#                                End of file                                   #
################################################################################
